<?php

namespace App\Http\Livewire\Frontend\Legal;

use Livewire\Component;

class Terms extends Component
{
    public function render()
    {
        return view('livewire.frontend.legal.terms')->extends('layouts.master');
    }
}
