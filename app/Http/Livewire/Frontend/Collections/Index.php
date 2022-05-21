<?php

namespace App\Http\Livewire\Frontend\Collections;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.frontend.collections.index')->extends('layouts.master');
        ;
    }
}
