<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Dashadmin extends Component
{
    public function render()
    {
        return view('livewire.admin.dashadmin')->layout('layouts.appAdmin');
    }
}
