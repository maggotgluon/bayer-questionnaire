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
        // dd($this->data['section1']);
        $this->emitUp('data',['key'=>1,'section'=>$this->data]);
    }
}
