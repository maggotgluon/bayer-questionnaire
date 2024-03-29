<?php

namespace App\Http\Livewire\Quiz;

use App\Models\Question as ModelsQuestion;
use Livewire\Component;

class Question extends Component
{
    public $step=0;
    public $sub=1;
    public $data=[];
    public $data1=[];
    public $now=[];
    public $result;


    protected $listeners = ['data'];

    public function data($data){
        $section_name ='section'.$data['key'];
        $this->data[$section_name] = $data['section'];

        $this->step=$this->data['section1']['path'];
        // dd($this->data);
        if(isset($this->data['section_part']['score'])){
            // dd($this->data,$this->step);
            $this->step='result';
            $this->result = ModelsQuestion::create([
                'user'=>request()->ip(),
                'ages'=>$this->data['section1']['age'],
                'answers'=>$this->data,
                'result'=>$this->data['section_part']['result'],
                'type'=>$this->data['section1']['path'],
                'score'=>$this->data['section_part']['score'],
            ]);
            // dd($this->result,$this->data);
            
            redirect()->route('result',[
                // 'data'=>$this->data,
                'idc'=>$this->result->id,
                'path'=>$this->data['section1']['path'],
                'result'=>$this->data['section_part']['result'],
                'age'=>$this->data['section1']['age']
            ]);
            // dd($this->data,$this->step);
        }

    }
    public function mount(){
        // dd(request()->ip(),\Request::getClientIp(true),$_SERVER,$GLOBALS);
        // $this->step='result';
        $this->now['date']=now()->toDateString();
        $this->now['time']=now()->toTimeString();

        $this->data['count']=0;
    }
    public function updateScore(){
        $score=0;
        if($this->data['q1-1']){}
        if($this->data['q1-2']){}
        if($this->data['q1-3']){}
        if($this->data['q1-3']){}
    }
    public function store(){}
    public function next($step=null){
        $this->step+=$step??1;
    }

    public function render()
    {
        return view('livewire.quiz.question')->layout('layouts.app');
    }
}
