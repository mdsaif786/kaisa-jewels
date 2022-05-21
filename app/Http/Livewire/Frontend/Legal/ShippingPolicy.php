<?php

namespace App\Http\Livewire\Frontend\Legal;

use Livewire\Component;

class ShippingPolicy extends Component
{
    public function render()
    {
        return view('livewire.frontend.legal.shipping-policy')->extends('layouts.master');
    }
}
