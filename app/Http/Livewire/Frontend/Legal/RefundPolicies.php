<?php

namespace App\Http\Livewire\Frontend\Legal;

use Livewire\Component;

class RefundPolicies extends Component
{
    public function render()
    {
        return view('livewire.frontend.legal.refund-policies')->extends('layouts.master');
    }
}
