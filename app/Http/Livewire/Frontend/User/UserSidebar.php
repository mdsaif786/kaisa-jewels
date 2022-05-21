<?php

namespace App\Http\Livewire\Frontend\User;

use Livewire\Component;
use App\Services\CustomerWishList;

class UserSidebar extends Component
{
    public $wish_count;
    protected $listeners = ['wishlistCount'];

    public function mount()
    {
        $this->wish_count = (new CustomerWishList())->wishListCount();
    }

    public function wishlistCount()
    {
        $this->wish_count -=1;
    }

    public function render()
    {
        return view('livewire.frontend.user.user-sidebar')
        ->extends('layouts.master');
    }
}
