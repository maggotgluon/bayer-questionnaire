<?php

namespace App\Http\Livewire\Admin\View;

use App\Models\Question;
use Livewire\Component;
use Livewire\WithPagination;

class User extends Component
{
    use WithPagination;

    public $filter,$order='desc';

    public function mount(){
        $this->filter = 0;
        // $qa = Question::where('type',$filter)->orderBy('created_at',$this->order)->get();
        // dd($qa);
    }
    public function render()
    {
        if($this->filter==0){
            $qa = Question::orderBy('created_at',$this->order)->paginate(10);
        }else{
            $qa = Question::where('type',$this->filter)->orderBy('created_at',$this->order)->paginate(10);
        }
        // dd($qa);
        return view('livewire.admin.view.user',[
            'questions'=>$qa
        ]);
    }
}
