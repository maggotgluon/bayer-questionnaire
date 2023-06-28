<?php

namespace App\Http\Livewire\Quiz\Section;

use Illuminate\Support\Arr;
use Livewire\Component;
use Spatie\Browsershot\Browsershot;

class Part2 extends Component
{
    public $page=1;
    public $data=[];
    public function mount(){
        $this->data['day']=0;
        $this->data['part']=2;
    }
    public function render()
    {
        return view('livewire.quiz.section.part2');
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
            $this->data['question-1'] = 'สิวขึ้นบริเวณไหนก่อนมีประจำเดือน';


            if (getType($this->data['q-1']) == 'array') {
                if(array_search('1', $this->data['q-1']) ){
                    $this->data['answer-1'][] = 'หน้าผาก';
                    $score += 0;
                }
                if(array_search('2', $this->data['q-1']) ){
                    $this->data['answer-1'][] = 'แก้ม';
                    $score += 2;
                }
                if(array_search('3', $this->data['q-1']) ){
                    $this->data['answer-1'][] = 'จมูก';
                    $score += 0;
                }
                if(array_search('4', $this->data['q-1']) ){
                    $this->data['answer-1'][] = 'คาง';
                    $score += 2;
                }
            } else {

                if($this->data['q-1'] == 1) {
                    $this->data['answer-1'][] = 'หน้าผาก';
                    $score += 0;
                }
                if($this->data['q-1'] == 2) {
                    $this->data['answer-1'][] = 'แก้ม';
                    $score += 2;
                }
                if($this->data['q-1'] == 3) {
                    $this->data['answer-1'][] = 'จมูก';
                    $score += 0;
                }
                if($this->data['q-1'] == 4) {
                    $this->data['answer-1'][] = 'คาง';
                    $score += 2;
                }

            }

        }
        if (isset($this->data['q-2'])) {

            $this->data['question-2'] = 'สิวประเภทไหนที่ขึ้นบน ใบหน้าก่อนมีประจําเดือน';



            if (getType($this->data['q-2']) == 'array') {
                if(array_search('1', $this->data['q-2']) ){
                    $this->data['answer-2'][] = 'สิวอุดตันหัวดํา';
                    $score += 0;
                }
                if(array_search('2', $this->data['q-2']) ){
                    $this->data['answer-2'][] = 'สิวอุดตันหัวขาว';
                    $score += 0;
                }
                if(array_search('3', $this->data['q-2']) ){
                    $this->data['answer-2'][] = 'สิวตุ่มหนอง';
                    $score += 1;
                }
                if(array_search('4', $this->data['q-2']) ){
                    $this->data['answer-2'][] = 'สิวหัวช้าง';
                    $score += 1;
                }
            } else {

                if($this->data['q-2'] == 1) {
                    $this->data['answer-2'][] = 'สิวอุดตันหัวดํา';
                    $score += 0;
                }
                if($this->data['q-2'] == 2) {
                    $this->data['answer-2'][] = 'สิวอุดตันหัวขาว';
                    $score += 0;
                }
                if($this->data['q-2'] == 3) {
                    $this->data['answer-2'][] = 'สิวตุ่มหนอง';
                    $score += 1;
                }
                if($this->data['q-2'] == 4) {
                    $this->data['answer-2'][] = 'สิวหัวช้าง';
                    $score += 1;
                }

            }

        }
        if (isset($this->data['q-3'])) {

            $this->data['question-3'] = 'สิวขึ้นซ้ำบริเวณเดิมหรือ ไม่ ก่อนมีประจําเดือน';

            switch ($this->data['q-3']) {
                case '1':
                    $this->data['answer-3'][] =  'ที่เดิม! สิวเก่าไม่ทันหาย สิวใหม่มาอีกละ';
                    $score += 1;
                    break;
                case '2':
                    $this->data['answer-3'][] = 'สิวเปลี่ยนที่ขึ้นไม่ซ้ำ จําโซนไม่ได้';
                    $score += 0;
                    break;
            }

        }

        if (isset($this->data['q-4'])) {

            $this->data['question-4'] = 'รู้จัก “สิวฮอร์โมน” ไหม';

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
        if($score <= 3){
            $this->data['result'] = 1;
        } else if($score == 4){
            $this->data['result'] = 2;
        }else{
            $this->data['result'] = 3;
        }
        $this->page();
        $this->emitData();
    }

    public function screenshot(){
        $this->dispatchBrowserEvent('name-updated', ['newName' => "hi"]);
    }
}
