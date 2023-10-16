<?php

namespace App\Http\Livewire\Admin\View;

use App\Models\Question;
use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Overview extends Component
{
    public $fb_shared;

    public function curl_get_shares( $url ){
        
        $access_token = env('FB_TOKEN');
        $api_url = 'https://graph.facebook.com/v3.0/?id=' . urlencode( $url ) . '&fields=engagement&access_token=' . $access_token;
        $fb_connect = curl_init(); // initializing
        curl_setopt( $fb_connect, CURLOPT_URL, $api_url );
        curl_setopt( $fb_connect, CURLOPT_RETURNTRANSFER, 1 ); // return the result, do not print
        curl_setopt( $fb_connect, CURLOPT_TIMEOUT, 20 );
        $json_return = curl_exec( $fb_connect ); // connect and get json data
        curl_close( $fb_connect ); // close connection
        $body = json_decode( $json_return );
        return intval( $body->engagement->share_count );
    }
    public function render()
    {
        $this->fb_shared = $this->curl_get_shares(route('home')); 
        $c='#4237C5';
        $dataset = Question::all();
        $to = date(Carbon::now());
        $from = date(Carbon::now()->subDays(30));
        $activeUser = Question::select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as views'))
            ->whereBetween('created_at',[$from,$to])
            ->groupBy('date')
            ->orderBy('date')
            ->get();
            // ->groupBy(function($date) {
            //     return Carbon::parse($date->created_at)->format('d'); // grouping by years
                //return Carbon::parse($date->created_at)->format('m'); // grouping by months
            // });
        // dd($activeUser,$from,$to);
        // $data['click_bkk'];
        $data['count']=$dataset->count()??0;

        $data['age']['9']= $dataset->where('ages','<',10)->count();
        $data['age']['10-20']= $dataset->whereBetween('ages',[10,20])->count();
        $data['age']['21-30']= $dataset->whereBetween('ages',[21,30])->count();
        $data['age']['31-40']= $dataset->whereBetween('ages',[31,40])->count();
        $data['age']['41-50']= $dataset->whereBetween('ages',[41,50])->count();
        $data['age']['51']= $dataset->where('ages','>',50)->count();

        $data['PMDD']['count'] = $dataset->where('type','1')->count();
        $data['PMDD']['Synptoms'] = $dataset->where('type','1')->where('result','3')->count();
        $data['PMDD']['Normal'] = $dataset->where('type','1')->where('result','2')->count();
        $data['PMDD']['Fine'] = $dataset->where('type','1')->where('result','1')->count();
        if($data['PMDD']['count']<>0){
            $data['PMDD']['Synptoms_percent'] = round($data['PMDD']['Synptoms']/$data['PMDD']['count']*100,4);
            $data['PMDD']['Normal_percent'] = round($data['PMDD']['Normal']/$data['PMDD']['count']*100,4);
            $data['PMDD']['Fine_percent'] = round($data['PMDD']['Fine']/$data['PMDD']['count']*100,4);
        }else{
            $data['PMDD']['Synptoms_percent'] = 0;
            $data['PMDD']['Normal_percent'] = 0;
            $data['PMDD']['Fine_percent'] = 0;
        }

        $data['Hormone']['count'] = $dataset->where('type','2')->count();
        $data['Hormone']['Synptoms'] = $dataset->where('type','2')->where('result','3')->count();
        $data['Hormone']['Normal'] = $dataset->where('type','2')->where('result','2')->count();
        $data['Hormone']['Fine'] = $dataset->where('type','2')->where('result','1')->count();
        if($data['Hormone']['count']<>0){
            $data['Hormone']['Synptoms_percent'] = round($data['Hormone']['Synptoms']/$data['Hormone']['count']*100,4);
            $data['Hormone']['Normal_percent'] = round($data['Hormone']['Normal']/$data['Hormone']['count']*100,4);
            $data['Hormone']['Fine_percent'] = round($data['Hormone']['Fine']/$data['Hormone']['count']*100,4);
        }else{
            $data['Hormone']['Synptoms_percent'] = 0;
            $data['Hormone']['Normal_percent'] = 0;
            $data['Hormone']['Fine_percent'] = 0;
        }

        $data['PCOS']['count'] = $dataset->where('type','3')->count();
        $data['PCOS']['Synptoms'] = $dataset->where('type','3')->where('result','3')->count();
        $data['PCOS']['Normal'] = $dataset->where('type','3')->where('result','2')->count();
        $data['PCOS']['Fine'] = $dataset->where('type','3')->where('result','1')->count();
        if($data['PCOS']['count']<>0){
            $data['PCOS']['Synptoms_percent'] = round($data['PCOS']['Synptoms']/$data['PCOS']['count']*100,4);
            $data['PCOS']['Normal_percent'] = round($data['PCOS']['Normal']/$data['PCOS']['count']*100,4);
            $data['PCOS']['Fine_percent'] = round($data['PCOS']['Fine']/$data['PCOS']['count']*100,4);
        }else{
            $data['PCOS']['Synptoms_percent'] = 0;
            $data['PCOS']['Normal_percent'] = 0;
            $data['PCOS']['Fine_percent'] = 0;
        }

        $chart1 =LivewireCharts::pieChartModel()
                ->addSlice('PMDD', $data['PMDD']['count'], '#4ADE80')
                ->addSlice('สิวฮอร์โมน', $data['Hormone']['count'], '#F87272')
                ->addSlice('PCOS', $data['PCOS']['count'], '#FB933D')
                ->setDataLabelsEnabled(false)
                ->withoutLegend()
            ;

            // dd(is_int($dataset[0]->ages),$dataset[0]->ages,$data,$dataset);

        $chart2 =LivewireCharts::ColumnChartModel()
        ->setTitle('User by Ages')
        ->setColumnWidth(15)
        ->addColumn('under 10', $data['age']['9'], $c)
        ->addColumn('10-20', $data['age']['10-20'], $c)
        ->addColumn('21-30', $data['age']['21-30'], $c)
        ->addColumn('31-40', $data['age']['31-40'], $c)
        ->addColumn('41-50', $data['age']['41-50'], $c)
        ->addColumn('over 50', $data['age']['51'], $c)
            ;

        $chart3 =LivewireCharts::lineChartModel()
        ->setTitle('Daly Active User');
        // 30 Day back
        $today = Carbon::now();
        $day = $today->subDays(6);
        // dd($activeUser->count());
        for ($i=0; $i < 7; $i++) {
            // $today->subDay();

            $d=$activeUser->where('date',$day->todateString())->first()->date??$day->todateString();
            $v=$activeUser->where('date',$day->todateString())->first()->views??0;
            // dd($d,$v,$activeUser->where('date',$day->todateString())->first());
            $chart3->addMarker($d,$v,$c,$v,$c,'#454545')
            ->addPoint($d,$v);
            // if(date($day) == $activeUser[$i]->date){
            // }else{
            //     $chart3->addPoint($day, 0, '#f6ad55');
            // }
            $day->addDay();
        }
        // foreach ($activeUser as $key => $value) {
        // }
        // ;
        // $chart1_options = [
        //     'chart_title' => 'User Active',
        //     'report_type' => 'group_by_date',
        //     'model' => 'App\Models\Question',
        //     'group_by_field' => 'created_at',
        //     'group_by_period' => 'day',
        //     'chart_type' => 'line',
        // ];
        // $chart1 = new cart($chart1_options);

        // $chart2_options = [
        //     'chart_title' => 'User Active',
        //     'report_type' => 'group_by_string',
        //     'model' => 'App\Models\Question',
        //     'group_by_field' => 'type',
        //     'name'=>"ans",
        //     'chart_color'=>['1'=>"0,200,0",'2'=>"200,0,0",'3'=>"0,0,200"],
        //     'labels'=>['1'=>'PMDD','2'=>'สิวฮอร์โมน','3'=>'PCOS'],
        //     'chart_type' => 'pie',
        // ];
        // $chart2 = new cart($chart2_options);
        // dd($data);
        return view('livewire.admin.view.overview',[
            'data'=>$data,
            'activeUser'=>$activeUser,
            'chart1'=>$chart1,
            'chart2'=>$chart2,
            'chart3'=>$chart3,
            // 'chart2'=>$chart2
        ]);
    }
}
