<?php

namespace App\Http\Livewire\Quiz\Section;

use Illuminate\Support\Arr;
use Livewire\Component;

class Path3 extends Component
{
    public $data=[];
    public $raw=[];
    public $page=0;

    protected $rules = [
        'data.q-1' => 'required',
        'data.q-2' => 'required',
        'data.q-4' => 'required'
    ];
    public function mount(){

        $this->data['question-1']='ประจําเดือนของเธอ เป็นแบบไหน';
        $this->raw['answer-1']['1']='ประจําเดือนมาห่างกันมากกว่า
        35 วัน หรือมาไม่เกิน 6-8 รอบต่อปี เป็นมานานแล้ว';
        $this->raw['answer-1']['2']='เคยมีประจําเดือนมาปกติ แต่
        ช่วงหลังประจําเดือนขาด ติดต่อกันเกิน 3 รอบ';
        $this->raw['answer-1']['3']='ประจําเดือนยังมาปกติดี';

        $this->data['question-2']='นอกจากประจําเดือนขาด
        เธอมีอาการอื่นร่วมไหม';
        $this->raw['answer-2']['1']='สิวเห่อ จนหน้าเธอเปลี่ยน';
        $this->raw['answer-2']['2']='หน้ามัน ทุกวัน จันทร์-อาทิตย์';
        $this->raw['answer-2']['3']='ขนดก ตกลงเป็นหญิงหรือชาย';
        $this->raw['answer-2']['4']='ผมร่วง นํ้าตาริน';
        $this->raw['answer-2']['5']='ไม่มีอาการเป็นลาภอันประเสริฐ';

        $this->data['question-4']='รู้จักภาวะ “PCOS
        หรือภาวะถุงนําใน
        รังไข่หลายใบ
        /ซีสต์ในรังไข่” ไหม';
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
        if($go==4){
            $this->validateOnly('data.q-4');
        }
        if($go==6){
            $this->emitData();
        }
        $this->page+=1;
    }

    public function emitData(){
        $score = 0;

        switch ($this->data['q-1']) {
            case '1':
                $this->data['answer-1'][] =  $this->raw['answer-1']['1'];
                $score += 2;
                break;
            case '2':
                $this->data['answer-1'][] = $this->raw['answer-1']['2'];
                $score += 1;
                break;
            case '3':
                $this->data['answer-1'][] =  $this->raw['answer-1']['3'];
                break;
        }

        $this->data['answer-2'][] = in_array('1', $this->data['q-2']) ? $this->raw['answer-2']['1'] : null;
        $this->data['answer-2'][] = in_array('2', $this->data['q-2']) ? $this->raw['answer-2']['2'] : null;
        $this->data['answer-2'][] = in_array('3', $this->data['q-2']) ? $this->raw['answer-2']['3'] : null;
        $this->data['answer-2'][] = in_array('4', $this->data['q-2']) ? $this->raw['answer-2']['4'] : null;
        $this->data['answer-2'] = array_filter($this->data['answer-2']);
        $score += count(Arr::except($this->data['q-2'], 5));

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
            case ($score<=5):
                $this->data['result'] = 1;
                break;
            case ($score=6):
                $this->data['result'] = 2;
                break;
            default:
                $this->data['result'] = 3;
                break;
        }
        // dd($score,$this->data['result']);
        $this->emitUp('data',['key'=>'_part','section'=>$this->data]);
    }
    public function render()
    {
        return view('livewire.quiz.section.path3');
    }
}
