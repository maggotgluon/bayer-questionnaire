<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;


class Overview extends Component
{

    public function render()
    {
        return view('livewire.admin.overview')->layout('layouts.app');
    }
}
