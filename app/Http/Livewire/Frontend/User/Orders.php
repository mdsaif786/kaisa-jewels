<?php

namespace App\Http\Livewire\Frontend\User;

use App\Models\Order;
use App\Models\OrderItem;
use Livewire\Component;

class Orders extends Component
{
    public $orders;
    public $order_items;

    public function mount(Order $id)
    {
        $this->orders= $id;

        // dd($this->orders);
        $this->order_items= OrderItem::with(['book'])
                                    ->where('order_id', $this->orders->id)
                                    ->latest()
                                    ->get();
    }

    public function render()
    {
        return view('livewire.frontend.user.orders')->extends('layouts.master');
    }
}
