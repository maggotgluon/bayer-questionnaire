<?php

namespace App\Http\Livewire\Quiz\Section;

use Livewire\Component;

class Path2 extends Component
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
    public function mount(){

        $this->data['question-1']='สิวขึ้นบริเวณไหนก่อนมีประจำเดือน';
        $this->raw['answer-1']['1']='หน้าผาก';
        $this->raw['answer-1']['2']='แก้ม';
        $this->raw['answer-1']['3']='จมูก';
        $this->raw['answer-1']['4']='คาง';

        $this->data['question-2']='สิวประเภทไหนที่ขึ้นบน ใบหน้าก่อนมีประจําเดือน';
        $this->raw['answer-2']['1']='สิวอุดตันหัวดํา';
        $this->raw['answer-2']['2']='สิวอุดตันหัวขาว';
        $this->raw['answer-2']['3']='สิวตุ่มหนอง';
        $this->raw['answer-2']['4']='สิวหัวช้าง';

        $this->data['question-3']='สิวขึ้นซ้ำบริเวณเดิมหรือ ไม่ ก่อนมีประจําเดือน';
        $this->raw['answer-3']['1']='ที่เดิม! สิวเก่าไม่ทันหาย สิวใหม่มาอีกละ';
        $this->raw['answer-3']['2']='สิวเปลี่ยนที่ขึ้นไม่ซ้ำ จําโซนไม่ได้';

        $this->data['question-4']='รู้จัก “สิวฮอร์โมน” ไหม';
        $this->raw['answer-4']['1']='รู้จัก';
        $this->raw['answer-4']['2']='ไม่แน่ใจ';
        $this->raw['answer-4']['3']='ไม่รู้จัก';

        $this->data['q-2']=[];
    }

    public function next($page=null){
        $go = $page??$this->page;

        if($go==1){
            $this->validateOnly('data.q-1');
        }
        if($go==2){
            $this->validateOnly('data.q-2');
        }
        if($go==3){
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
        $this->data['answer-1'][] = in_array('1', $this->data['q-1']) ? $this->raw['answer-1']['1'] : null;
        $this->data['answer-1'][] = in_array('2', $this->data['q-1']) ? $this->raw['answer-1']['2'] : null;
        $this->data['answer-1'][] = in_array('3', $this->data['q-1']) ? $this->raw['answer-1']['3'] : null;
        $this->data['answer-1'][] = in_array('4', $this->data['q-1']) ? $this->raw['answer-1']['4'] : null;
        $this->data['answer-1'] = array_filter($this->data['answer-1']);
        if(in_array('2', $this->data['q-1'])){
            $score += 2;
        }
        if(in_array('4', $this->data['q-1'])){
            $score += 2;
        }
        
        $this->data['answer-2'][] = in_array('1', $this->data['q-2']) ? $this->raw['answer-2']['1'] : null;
        $this->data['answer-2'][] = in_array('2', $this->data['q-2']) ? $this->raw['answer-2']['2'] : null;
        $this->data['answer-2'][] = in_array('3', $this->data['q-2']) ? $this->raw['answer-2']['3'] : null;
        $this->data['answer-2'][] = in_array('4', $this->data['q-2']) ? $this->raw['answer-2']['4'] : null;
        $this->data['answer-2'] = array_filter($this->data['answer-2']);
        if(in_array('3', $this->data['q-2'])){
            $score += 1;
        }
        if(in_array('4', $this->data['q-2'])){
            $score += 1;
        }
        
        if($this->data['q-3']==1){
            $this->data['answer-3'][] = $this->raw['answer-3']['1'];
            $score += 1;
        }else{
            $this->data['answer-3'][] = $this->raw['answer-3']['2'];

        }
        

        switch ($this->data['q-4']) {
            case '1':
                $this->data['answer-4'][] =  $this->raw['answer-4']['1'];
                break;
            case '2':
                $this->data['answer-4'][] = $this->raw['answer-4']['2'];
                break;
            case '3':
                $this->data['answer-4'][] =  $this->raw['answer-4']['3'];
                break;
        }
        

        $this->data['score'] = $score;
        switch (true) {
            case ($score<=3):
                $this->data['result'] = 1;
                break;
            case ($score==4):
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
        return view('livewire.quiz.section.path2');
    }
}
