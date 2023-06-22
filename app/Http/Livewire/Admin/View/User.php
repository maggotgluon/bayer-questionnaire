<?php

namespace App\Http\Livewire\Admin\View;

use App\Models\Question;
use Livewire\Component;
use Livewire\WithPagination;

class User extends Component
{
    use WithPagination;
    public function render()
    {
        $qa = Question::orderBy('created_at','desc')->paginate(10);
        return view('livewire.admin.view.user',[
            'questions'=>$qa
        ]);
    }
}
