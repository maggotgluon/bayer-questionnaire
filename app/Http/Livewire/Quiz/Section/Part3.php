<?php

namespace App\Http\Livewire\Quiz\Section;

use Livewire\Component;

class Part3 extends Component
{
    public $page=0;
    public $data=[];
    public function mount(){
        $this->data['day']=0;
        $this->data['part']=3;
    }
    public function render()
    {
        return view('livewire.quiz.section.part3');
    }


    public function page($page = null){
        $this->page = $page ?? $this->page + 1;
    }
    public function emitData(){
        $this->emitUp('data', ['key' => '_part', 'section' => $this->data]);
    }
    public function updateScore()
    {
        $score = 0;

        if (isset($this->data['q-1'])) {
            $this->data['question-1'] = 'ประจําเดือนของเธอ เป็นแบบไหน';

            switch ($this->data['q-1']) {
                case '1':
                    $this->data['answer-1'][] =  'ประจําเดือนมาห่างกันมากกว่า 35 วัน หรือมาไม่เกิน 6-8 รอบต่อปี เป็นมานานแล้ว';
                    $score += 1;
                    break;
                case '2':
                    $this->data['answer-1'][] = 'เคยมีประจําเดือนมาปกติ แต่ ช่วงหลังประจําเดือนขาด ติดต่อกันเกิน 3 รอบ';
                    $score += 0;
                    break;
                case '3':
                    $this->data['answer-1'][] = 'ประจําเดือนยังมาปกติดี';
                    $score += 0;
                    break;
            }

        }
        if (isset($this->data['q-2'])) {

            $this->data['question-2'] = 'นอกจากประจําเดือนขาด เธอมีอาการอื่นร่วมไหม';



            if (getType($this->data['q-2']) == 'array') {
                if(array_search('1', $this->data['q-2']) ){
                    $this->data['answer-2'][] = 'สิวเห่อ จนหน้าเธอเปลี่ยน';
                    $score += 0;
                }
                if(array_search('2', $this->data['q-2']) ){
                    $this->data['answer-2'][] = 'หน้ามัน ทุกวัน จันทร์-อาทิตย์';
                    $score += 0;
                }
                if(array_search('3', $this->data['q-2']) ){
                    $this->data['answer-2'][] = 'ขนดก ตกลงเป็นหญิงหรือชาย';
                    $score += 1;
                }
                if(array_search('4', $this->data['q-2']) ){
                    $this->data['answer-2'][] = 'ผมร่วง นําตาริน';
                    $score += 1;
                }
                if(array_search('5', $this->data['q-2']) ){
                    $this->data['answer-2'][] = 'ไม่มีอาการเป็นลาภอันประเสริฐ';
                    $score += 1;
                }
            } else {

                if($this->data['q-2'] == 1) {
                    $this->data['answer-2'][] = 'สิวเห่อ จนหน้าเธอเปลี่ยน';
                    $score += 0;
                }
                if($this->data['q-2'] == 2) {
                    $this->data['answer-2'][] = 'หน้ามัน ทุกวัน จันทร์-อาทิตย์';
                    $score += 0;
                }
                if($this->data['q-2'] == 3) {
                    $this->data['answer-2'][] = 'ขนดก ตกลงเป็นหญิงหรือชาย';
                    $score += 1;
                }
                if($this->data['q-2'] == 4) {
                    $this->data['answer-2'][] = 'ผมร่วง นําตาริน';
                    $score += 1;
                }
                if($this->data['q-2'] == 5) {
                    $this->data['answer-2'][] = 'ไม่มีอาการเป็นลาภอันประเสริฐ';
                    $score += 1;
                }

            }

        }


        if (isset($this->data['q-4'])) {

            $this->data['question-4'] = 'รู้จักภาวะ “PCOS หรือภาวะถุงนําใน รังไข่หลายใบ /ซีสต์ในรังไข่” ไหม';

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
        }
        $this->data['score'] = $score;
        if($score == 0){
            $this->data['result'] = 1;
        } else if($score == 1||$score == 2){
            $this->data['result'] = 2;
        }else{
            $this->data['result'] = 3;
        }
        $this->page();
        $this->emitData();
    }

}
