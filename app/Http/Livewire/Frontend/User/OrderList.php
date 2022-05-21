<?php

namespace App\Http\Livewire\Frontend\User;

use App\Models\OrderItem;
use Livewire\Component;

use Auth;

class OrderList extends Component
{
    public $order_lists;

    public function mount()
    {
        $this->order_lists= OrderItem::
                                with(['book','order'])
                                ->whereHas('order', function ($query) {
                                    //$query->where('user_id',auth::id());
                                })
                                ->latest()
                                ->take(5)
                                ->get();
    }

    public function render()
    {
        return view('livewire.frontend.user.order-list')->extends('layouts.master');
    }
}
