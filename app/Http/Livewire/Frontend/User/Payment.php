<?php

namespace App\Http\Livewire\Frontend\User;

use Livewire\Component;

class Payment extends Component
{
    public function render()
    {
        return view('livewire.frontend.user.payment')->extends('layouts.master');
    }
}
