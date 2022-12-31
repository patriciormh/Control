<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\user;
class UserList extends Component
{
    public function render()
    {
        $users=user::all();
        return view('livewire.user-list',compact('users'))->layout('layouts.appAdmin');
    }
}
