<?php

namespace App\Http\Livewire\Quiz;

// use Illuminate\Support\Facades\Storage;
use Livewire\Component;
// use VerumConsilium\Browsershot\Facades\Screenshot;
use App\Models\Question;
use Illuminate\Support\Facades\Http;
use WireUi\Traits\Actions;

class Result extends Component
{
    use Actions;
    public $path,$result,$age;
    public $ans;

    public $title,$images,$content, $image_face,$lottie,$idkey,$idc;
    protected $queryString = ['id'];
    public function mount(){
        $content['1']['1']['title']='สาวสมดุล';
        $content['1']['1']['content']='สาวสมดุล เพราะอาการก่อนมีประจําเดือน
                                        ของเธออยู่ในเกณฑ์ที่ไม่เสียง ต้องรอดู
                                        อาการทังทางร่างกาย และจิตใจ แต่ยังไงก็
                                        หมันสังเกตตัวเองเสมอนะสาว';
        $content['1']['1']['images']='';

        $content['1']['2']['title']='สาวนักแปร (ปรวน)';
        $content['1']['2']['content']='สาวนักแปร (ปรวน) เริ่มมีอารมณ์
                                        แปรปรวน วิตกกังวล อ่อนไหวช่วงก่อนมี
                                        ประจําเดือน ทําให้เริ่มส่งผลต่อชีวิตประจํา
                                        วัน เธออย่าชะล่าใจ รีบปรึกษาผู้เชี่ยวชาญ
                                        นะสาว';
        $content['1']['2']['images']='';

        $content['1']['3']['title']='สาวดุดัน ไม่เกรงใจใคร';
        $content['1']['3']['content']='สาวดุดัน ไม่เกรงใจใคร อาการก่อนมีประจํา
                                        เดือนของเธอ มีความผิดปกติทั้งทาง
                                        ร่างกายและจิตใจที่ควบคุมได้ยาก เธอต้อง
                                        รีบปรึกษาผู้เชี่ยวชาญได้แล้วนะสาว';
        $content['1']['3']['images']='';


        $content['2']['1']['title']='สาวนักปรนนิบัติผิว';
        $content['2']['1']['content']='สาวนักดูแลผิว สิวฮอร์โมนยังไม่ก่อกวน แต่
                                        เธอเริ่มมีความกังวล ยังไงก็หมั่นดูแลตัว
                                        เองเสมอนะสาว';
        $content['2']['1']['images']='';

        $content['2']['2']['title']='สาวสู้สิว';
        $content['2']['2']['content']='สาวนักบู๊ สู้กับสิวฮอร์โมน เพราะสัญญาณ
                                        ของสิวฮอร์โมนเริ่มก่อกวนใจ สิวเธอเริ่ม
                                        เห่อแดง แถมความมันใจก็ลดลง ลอง
                                        ปรึกษาผู้เชี่ยวชาญนะสาว';
        $content['2']['2']['images']='';

        $content['2']['3']['title']='สาวเศร้าเพราะหน้ามีสิว';
        $content['2']['3']['content']='สาวเศร้าหนัก เพราะสิวฮอร์โมนขึ้นบ่อย ขึ้น
                                        ซํ้า รอยเก่ายังไม่ทันหาย รอยใหม่ก็มา
                                        ทักทายอีกแล้ว รีบปรึกษาผู้เชี่ยวชาญเพื่อ
                                        ปรับสมดุลในร่างกายนะสาว';
        $content['2']['3']['images']='';


        $content['3']['1']['title']='สาวสม่ำเสมอ';
        $content['3']['1']['content']='สาวสม่ำเสมอ เพราะประจําเดือนที่มาประจํา
                                        ทําให้ชีวิตเธอไร้กังวล แต่ก็อย่าลืมสังเกต
                                        ร่างกายตัวเองเสมอนะสาว';
        $content['3']['1']['images']='';

        $content['3']['2']['title']='สาวสะดุด';
        $content['3']['2']['content']='สาวสะดุด เพราะประจําเดือนเริ่มมาไม่ประจํา
                                        สะดุดบ้าง ขาดๆ หายๆ ก็ทําใจหายทุกครั้ง
                                        ต้องปรึกษาผู้เชี่ยวชาญได้แล้วนะสาว';
        $content['3']['2']['images']='';

        $content['3']['3']['title']='สาวนักแปลงร่าง';
        $content['3']['3']['content']='สาวร่างเป็นสตรี แต่เหมือนมีฮอร์โมนชาย
                                        หนุ่มมาแทรกแซง ประจําเดือนขาดๆ หายๆ
                                        ร่างกายส่งสัญญาณผิดปกติ ต้องรีบ
                                        ปรึกษาผู้เชี่ยวชาญนะสาว';
        $content['3']['3']['images']='';

        $path = $this->path;
        $result = $this->result;
        $this->ans = Question::find($this->idc);
        // dd($data->answers,$data);
        // dd($path,gettype($path),$result,gettype($result));
        $this->idkey = 'key'.$path.'-'.$result;
        $this->title=$content[$path][$result]['title'];
        $this->content=$content[$path][$result]['content'];
        $this->images='images/result_img_'.$path.'-'.$result.'.png';
                
        $this->lottie=asset('images/lottie/result'.$path.'-'.$result.'.json');

        $this->image_face = 'images/result_'.$result.'.png';
    }

    public function go_bkk(){
        // dd('go bkk drugstore');
        $q = $this->ans;
        // dd($q,$q->answers);
        $data='{"screen":"chatroom","type":"TR","value":{"message":"';
            // $data="";
        // $data.= "ID".str_pad($q->id, 5,'0',STR_PAD_LEFT)."/n";
        // $data.= "AGE".$q->ages."/n";
        // $data.=$q->created_at."/n";

        // $data.='as';
        switch ($q->type) {
            case '1':
                # code...
                $data.='PMDD/';
                break;
            case '2':
                # code...
                $data.='สิวฮอร์โมน/';
                break;
            case '3':
                # code...
                $data.='PCOS/';
                break;
            default:
                # code...
                $data.='UNKNOWN/';
                break;
        }
        switch ($q->result) {
            case '1':
                # code...
                $data.='Normal ยังสบาย หายห่วง';
                break;
            case '2':
                # code...
                $data.='Moderate ปรึกษาแพทย์/เภสัช หน่อยน๊า';
                break;
            case '3':
                # code...
                $data.='Severe ปรึกษาแพทย์/เภสัชด่วนจ้า';
                break;
            default:
                # code...
                $data.='UNKNOWN';
                break;
        }
        
        $data.='/\"';
        $data.=is_array($q->answers['section1']['select'])?
                                    implode(',',$q->answers['section1']['select'])."/"
                                    :$q->answers['section1']['select']."/";
        $data.="".$q->answers['section_part']['question-1']."(";
        $data.=is_array($q->answers['section_part']['answer-1'])?
                                    implode(',',$q->answers['section_part']['answer-1']).")/"
                                    :$q->answers['section_part']['answer-1'].")/";
        $data.="".$q->answers['section_part']['question-2']."(";
        $data.=is_array($q->answers['section_part']['answer-2'])?
                                    implode(',',$q->answers['section_part']['answer-2']).")/"
                                    :$q->answers['section_part']['answer-2'].")/";
        if(isset($q->answers['section_part']['question-3'])){
            $data.="".$q->answers['section_part']['question-3']."(";
            $data.=is_array($q->answers['section_part']['answer-3'])?
                                    implode(',',$q->answers['section_part']['answer-3']).")/"
                                    :$q->answers['section_part']['answer-3'].")/";
        }
        $data.="".$q->answers['section_part']['question-4']."(";
        $data.=is_array($q->answers['section_part']['answer-4'])?
                                    implode(',',$q->answers['section_part']['answer-4']).")/"
                                    :$q->answers['section_part']['answer-4'].")/";
        // dd($data,$q->answers,$this->ans);
        $data.='","is_register":"N"}}';
        $data=trim(preg_replace('/\s\s+/', ' ', $data));
        // dd($data,json_encode($data));
        /* $response = Http::withHeaders([
                'Content-Type'=>'application/json',
                'source'=>env('BKK_SOURCE'),
                'apikey'=>env('BKK_API')
            ])->post(env('BKK_URL'),[
                $data
            ]);
        if($response->successful())
        {
            $body = $response->json();
            dd($data,"yes",$body,env('BKK_SOURCE'),env('BKK_API'),env('BKK_URL'));
        }
        else
        {
            dd($data,"no",$response,env('BKK_SOURCE'),env('BKK_API'),env('BKK_URL'));
        } */
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => env('BKK_URL'),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 300,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>$data,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'source: '.env('BKK_SOURCE'),
            'apikey: '.env('BKK_API')
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);


        $answers = $q->answers;
        // dd(request(),request()->userAgent());
        if(isset($answers['click_bkkdrug'])){
            $answers['click_bkkdrug']++;
        }else{
            $answers=array('click_bkkdrug'=>1)+$answers;
            // array_push($answers,['click_bkkdrug'=>1]);
        }

        if(isset($answers['bangkokdrugstore'])){
            // $answers['bangkokdrugstore']=json_decode($response)->deep_links;
            array_push($answers['bangkokdrugstore'],$response);
        }else{
            $answers=array('bangkokdrugstore'=>[$response])+$answers;
        }
        $answers=array('userAgent'=>[request()->userAgent()])+$answers;
        $q->answers=$answers;
        // dd($q->answers);
        $q->save();
        // dd($q->answers);
        if(isset(json_decode($response)->deep_links)){
            // dd(json_decode($response)->deep_links);
            return redirect(json_decode($response)->deep_links);
        }else{
            // dd(json_decode($response));
            $this->notification()->error(
                $title = 'Error !!!',
                $description = 'Code'.json_decode($response)->statusCode." : ".json_decode($response)->message
            );
        }

        // call api
        // readdir to return api call
    }
    public function screenshot2(){
        // dd(response()->download('images/result/Result-'.$this->path.'-'.$this->result.'.png'));
        $this->dispatchBrowserEvent('save-updated');
        return response()->download('images/result/Result-'.$this->path.'-'.$this->result.'.png');
        
        // return Storage::download(asset('result/Result-1-1.png'));
    }
    public function render()
    {
        
        return view('livewire.quiz.result');
    }
}
