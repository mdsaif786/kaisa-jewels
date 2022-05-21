<?php

namespace App\Http\Livewire\Frontend\Legal;

use Livewire\Component;

class UserGuidelines extends Component
{
    public function render()
    {
        return view('livewire.frontend.legal.user-guidelines')->extends('layouts.master');
    }
}
