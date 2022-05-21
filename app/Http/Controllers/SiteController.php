<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Coupon;

class SiteController extends Controller
{
    public function invoice($id)
    {
        $orders=Order::where('id', $id)->first();
        //  dd('coupons');
        $order_items= OrderItem::where('order_id', $orders->id)
                              ->latest()
                              ->get();
        $coupons = Coupon::where('id', $orders->coupon_id)->first();

        return view('livewire.frontend.user.invoice', [
                'orders'=>$orders,
                'order_items'=>$order_items,
                'coupons'=>$coupons,
        ]);
    }
}
