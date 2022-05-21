<?php

namespace App\Http\Livewire\Frontend\User;

use Livewire\Component;

class OrderDetail extends Component
{
    public function render()
    {
        return view('livewire.frontend.user.order-detail')->extends('layouts.master');
    }
}
