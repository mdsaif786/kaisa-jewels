<?php

namespace App\Http\Livewire\Frontend\Faq;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.frontend.faq.index')
        ->extends('layouts.master');
    }
}
