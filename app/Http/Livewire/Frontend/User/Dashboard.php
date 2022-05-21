<?php

namespace App\Http\Livewire\Frontend\User;

use Livewire\Component;
use App\Services\CustomerWishList;

class Dashboard extends Component
{
    public $wish_count;

    public function mount()
    {
        $this->wish_count = (new CustomerWishList())->wishListCount();
    }

    public function render()
    {
        return view('livewire.frontend.user.dashboard')
        ->extends('layouts.master');
    }
}
