<?php

namespace App\Http\Livewire\Frontend\User;

use Livewire\Component;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Coupon;

class Invoice extends Component
{
    public $orders;
    public $order_items;
    public $billing_address;
    public $coupons;

    public function mount(Order $id)
    {
        $this->orders= $id;

        $this->order_items= OrderItem::where('order_id', $this->orders->id)
                              ->latest()
                              ->get();
        $this->coupons = Coupon::where('id', $this->orders->coupon_id)->first();
    }
    public function render()
    {
        return view('livewire.frontend.user.invoice')->extends('layouts.master');
    }
}
