<?php

namespace App\Http\Livewire\Quiz;

use Livewire\Component;

class Section1 extends Component
{
    public $page=0;
    public $sub=1;
    public $data=[];

    public function render()
    {
        return view('livewire.quiz.section1');
    }

    public function page($page=null){
        $this->page = $page??$this->page+1;
        $this->sub=1;
    }
    public function sub(){
        $this->sub+=1;
    }
    public function emitData(){
        if (getType($this->data['check']) == 'array') {
            $this->data['select'][]=array_search('1', $this->data['check']) ? 'ปวดท้อง เวียนหัว ตึงเต้า อารมณ์แปรปรวน' : null;
            $this->data['select'][]=array_search('2', $this->data['check']) ? 'สิวสาวเห่อแดง แสลงใจทุกครั้ง ที่เป็นสิว' : null;
            $this->data['select'][]=array_search('3', $this->data['check']) ? 'ประจําเดือนที่ไม่มาประจํา ทําใจลุ้นทุกเดือน' : null;
            $this->data['select'] = array_filter($this->data['select']);
        } else {
            switch ($this->data['check']) {
                case '1':
                    $this->data['select'][] =  'ปวดท้อง เวียนหัว ตึงเต้า อารมณ์แปรปรวน';
                    // $this->data['a1-1'] .= 'อยากอยู่เงียบ ๆ คนเดียว';
                    break;
                case '2':
                    // $this->data['a1-1'] .= 'ร้องไห้กับเรืองเดิมๆ';
                    $this->data['select'][] = 'สิวสาวเห่อแดง แสลงใจทุกครั้ง ที่เป็นสิว';
                    break;
                case '3':
                    // $this->data['a1-1'] .= 'อา..รมณ์เสีย อารมณ์เสียยยยย อารมณ์เสียยยยยย !';
                    $this->data['select'][] = 'ประจําเดือนที่ไม่มาประจํา ทําใจลุ้นทุกเดือน';
                    break;
            }
        }

        // dd($this->data);
        // switch ($this->data['check']) {
        //     case 'value':
        //         # code...
        //         break;

        //     default:
        //         # code...
        //         break;
        // }
        $this->emitUp('data',['key'=>1,'section'=>$this->data]);
    }
}
