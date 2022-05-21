<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class Register extends Component
{
    public function render()
    {
        return view('livewire.frontend.register')->extends('layouts.master');
    }
}
