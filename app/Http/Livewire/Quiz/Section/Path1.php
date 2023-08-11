<?php
namespace App\Http\Livewire\Quiz\Section;

use Illuminate\Support\Arr;
use Livewire\Component;

class Path1 extends Component
{

    public $data=[];
    public $raw=[];
    public $page=0;

    protected $rules = [
        'data.q-1' => 'required',
        'data.q-2' => 'required',
        'data.q-3' => 'required',
        'data.q-4' => 'required'
    ];
    protected $messages = [
        'data.q-1.required' => 'กรุณากดตัวเลือก',
        'data.q-2.required' => 'กรุณากดตัวเลือก',
        'data.q-3.required' => 'กรุณากดตัวเลือก',
        'data.q-4.required' => 'กรุณากดตัวเลือก',
    ];
    public function count($num){
        // dd($num);
        $this->data['q-3']=$this->data['q-3']+$num;
        if($this->data['q-3']<=0){
            $this->data['q-3']=0;
        }
        if($this->data['q-3']>=30){
            $this->data['q-3']=30;
        }
    }
    public function mount(){

        $this->data['question-1']='เธอดุดันระดับไหนก่อนมี ประจําเดือน';
        $this->raw['answer-1']['1']='อยากอยู่เงียบ ๆ คนเดียว';
        $this->raw['answer-1']['2']='ร้องไห้กับเรื่องเดิมๆ';
        $this->raw['answer-1']['3']='อา..รมณ์เสีย อารมณ์เสียยยยย อารมณ์เสียยยยยย !';

        $this->data['question-2']='เธอมีความเปลี่ยนแปลง ทางร่างกายร่วมด้วยไหม';
        $this->raw['answer-2']['1']='นอนไม่หลับ ร่างกายกระสับกระส่าย';
        $this->raw['answer-2']['2']='ตัวบวม หน้าบวม รวมๆแล้วเซ็ง';
        $this->raw['answer-2']['3']='สิวเก่ายังไม่หาย สิวใหม่ก็มาแทรก';
        $this->raw['answer-2']['4']='ปวดท้องน้อย มากๆ';
        $this->raw['answer-2']['5']='ร่างกายปกติที่แสนพิเศษ';

        $this->data['question-3']='เธอมักจะมีอาการเหล่านี้้ ก่อนเป็นประจําเดือนกี่วัน';

        $this->data['question-4']='รู้จักภาวะ “PMDD” ไหม';
        $this->raw['answer-4']['1']='รู้จัก';
        $this->raw['answer-4']['2']='ไม่แน่ใจ';
        $this->raw['answer-4']['3']='ไม่รู้จัก';

        $this->data['q-2']=[];
        $this->data['q-1']=[];
        $this->data['q-3']=0;
    }
    public function next($page=null){
        $go = $page??$this->page;
        if($go==1){
            $this->validateOnly('data.q-1');
        }
        if($go==2){
            $this->validateOnly('data.q-2');
        }
        if($go==2){
            $this->validateOnly('data.q-3');
        }
        if($go==5){
            $this->validateOnly('data.q-4');
        }
        if($go==7){
            $this->emitData();
        }
        $this->page+=1;
    }
    public function emitData(){
        $score = 0;
        $this->data['answer-1'][] = in_array('1', $this->data['q-1']) ? 'อยากอยู่เงียบ ๆ คนเดียว' : null;
        $this->data['answer-1'][] = in_array('2', $this->data['q-1']) ? 'ร้องไห้กับเรืองเดิมๆ' : null;
        $this->data['answer-1'][] = in_array('3', $this->data['q-1']) ? 'อา..รมณ์เสีย อารมณ์เสียยยยย อารมณ์เสียยยยยย !' : null;
        $this->data['answer-1'] = array_filter($this->data['answer-1']);
        $score += count($this->data['answer-1']);
        
        $this->data['answer-2'][] = in_array('1', $this->data['q-2']) ? 'นอนไม่หลับ ร่างกายกระสับกระส่าย' : null;
        $this->data['answer-2'][] = in_array('2', $this->data['q-2']) ? 'ตัวบวม หน้าบวม รวมๆแล้วเซ็ง' : null;
        $this->data['answer-2'][] = in_array('3', $this->data['q-2']) ? 'สิวเก่ายังไม่หาย สิวใหม่ก็มาแทรก' : null;
        $this->data['answer-2'][] = in_array('4', $this->data['q-2']) ? 'ปวดท้องน้อย มากๆ' : null;
        $this->data['answer-2'][] = in_array('5', $this->data['q-2']) ? 'ร่างกายปกติที่แสนพิเศษ' : null;
        $this->data['answer-2'] = array_filter($this->data['answer-2']);
        $score += count(
            Arr::where($this->data['q-2'], function (string|int $value, int $key) {
                return $value!=5;
            })
        );
        $this->data['question-3'] = 'เธอมักจะมีอาการเหล่านี้้ ก่อนเป็นประจําเดือนกี่วัน';
        $this->data['answer-3'][] =  $this->data['q-3'].' วัน';
        if ($this->data['q-3'] <= 10) {
            $score += 1;
        } else {
            $score += 2;
        }

        $this->data['question-4'] = 'รู้จักภาวะ “PMDD” ไหม';

        switch ($this->data['q-4']) {
            case '1':
                $this->data['answer-4'][] =  'รู้จัก';
                break;
            case '2':
                $this->data['answer-4'][] = 'ไม่แน่ใจ';
                break;
            case '3':
                $this->data['answer-4'][] =  'ไม่รู้จัก';
                break;
        }

        $this->data['score'] = $score;
        // dd($score);
        switch (true) {
            case ($score<3):
                $this->data['result'] = 1;
                break;
            case ($score==3):
                $this->data['result'] = 2;
                break;
            default:
                $this->data['result'] = 3;
                break;
        }
        
        $this->emitUp('data',['key'=>'_part','section'=>$this->data]);
    }
    public function render()
    {
        return view('livewire.quiz.section.path1');
    }
}
