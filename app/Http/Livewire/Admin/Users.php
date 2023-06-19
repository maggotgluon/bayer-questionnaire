<?php

namespace App\Http\Livewire\Admin;

use App\Models\Question;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;

    public function render()
    {
        $qa = Question::paginate(10);
        return view('livewire.admin.users',[
            'questions'=>$qa
        ]);
    }
}
