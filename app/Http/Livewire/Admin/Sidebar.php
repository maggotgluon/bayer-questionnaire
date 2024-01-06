<?php

namespace App\Http\Livewire\Admin;

use App\Models\Question;
use Illuminate\Support\Carbon;
use Livewire\Component;

class Sidebar extends Component
{
    public function exportData(){
        $now = Carbon::now()->toDateTimeString();
        // dd($now);
        $fileName = 'answer-'.$now.'.csv';
        $qa = Question::all();
        
        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('id', 'age', 'type', 'result', 'score','answer','answer-1','answer-2','answer-3','answer-4', 'create at','click');

        $callback = function() use($qa, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($qa as $q) {
                $row['id']  = $q->id;
                $row['age']    = $q->ages;
                switch ($q->type) {
                    case 1:
                        $row['type']    = 'PMDD';
                        break;
                    case 2:
                        $row['type']    = 'สิวฮอร์โมน';
                        break;
                    case 3:
                        $row['type']    = 'PCOS';
                        break;
                    default:
                        $row['type']    = '-';
                        break;
                }
                switch ($q->result) {
                    case 1:
                        $row['result']    = 'Fine';
                        break;
                    case 2:
                        $row['result']    = 'Normal';
                        break;
                    case 3:
                        $row['result']    = 'Synptoms';
                        break;
                    default:
                        $row['result']    = '-';
                        break;
                }
                $row['score']  = $q->score;
                $row['answer']  = isset($q->answers['section1']['select'])?implode(',',$q->answers['section1']['select']):"-";
                $row['answer-1']  = isset($q->answers['section_part']['answer-1'])?implode(',',$q->answers['section_part']['answer-1']):"-";
                $row['answer-2']  = isset($q->answers['section_part']['answer-2'])?implode(',',$q->answers['section_part']['answer-2']):"-";
                $row['answer-3']  = isset($q->answers['section_part']['answer-3'])?implode(',',$q->answers['section_part']['answer-3']):"-";
                $row['answer-4']  = isset($q->answers['section_part']['answer-4'])?implode(',',$q->answers['section_part']['answer-4']):"-";
                

                $row['click'] = isset($q->answers['click_boots'])?1:0;

                $row['created_at']  = $q->created_at??"-";
                // dd($q,$row);
                

                fputcsv($file, array($row['id'], $row['age'], $row['type'], $row['result'], $row['score'], $row['answer'], $row['answer-1'], $row['answer-2'], $row['answer-3'],$row['answer-4'],$row['created_at'],$row['click']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
    public function render()
    {
        return view('livewire.admin.sidebar');
    }
}
