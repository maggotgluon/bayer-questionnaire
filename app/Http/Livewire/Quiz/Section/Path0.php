<?php

namespace App\Http\Livewire\Quiz\Section;

use Livewire\Component;

class Path0 extends Component
{
    public $data=[];
    public $page=-1;

    protected $rules = [
        'data.age' => 'required',
        'data.check' => 'required',
        'data.path'=>'required'
    ];

    public function mount(){
        $this->data['check']=[];
        $this->data['path']=[];
    }
    public function next($page=null){
        $go = $page??$this->page;
        if($go==1){
            $this->validateOnly('data.age');
        }
        if($go==2){
            
            $this->validateOnly('data.check');
            if(count($this->data['check'])==1){
                $this->data['path'] = $this->data['check'][0];
                $go=3;
            }

        }
        if($go==3){
            $this->validateOnly('data.path');
            $this->emitData();
        }
        $this->page+=1;
    }
    public function emitData(){
        $this->data['select'][]=in_array('1', $this->data['check']) ? 'ปวดท้อง เวียนหัว ตึงเต้า อารมณ์แปรปรวน' : null;
        $this->data['select'][]=in_array('2', $this->data['check']) ? 'สิวสาวเห่อแดง แสลงใจทุกครั้ง ที่เป็นสิว' : null;
        $this->data['select'][]=in_array('3', $this->data['check']) ? 'ประจําเดือนที่ไม่มาประจํา ทําใจลุ้นทุกเดือน' : null;
        $this->data['select'] = array_filter($this->data['select']);

        $this->emitUp('data',['key'=>1,'section'=>$this->data]);
    }
    public function render()
    {
        return view('livewire.quiz.section.path0');
    }
}
