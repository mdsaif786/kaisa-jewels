<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class ResetPassword extends Component
{
    public function render()
    {
        return view('livewire.frontend.reset-password')->extends('layouts.master');
    }
}
