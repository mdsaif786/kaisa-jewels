<?php

namespace App\Http\Livewire\Frontend\Legal;

use Livewire\Component;

class Gdpr extends Component
{
    public function render()
    {
        return view('livewire.frontend.legal.gdpr')->extends('layouts.master');
    }
}
