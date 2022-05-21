<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class ForgotPassword extends Component
{
    public function render()
    {
        return view('livewire.frontend.forgot-password')->extends('layouts.master');
    }
}
