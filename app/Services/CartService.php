<?php

namespace App\Services;

use Auth;
use App\Models\Book;
use App\Models\Order;
use App\Models\WishList;
use App\Models\OrderItem;
use Illuminate\Support\Str;

class CartService
{
    public function addToCart($book_id, $quantity=1)
    {
        $ip=$_SERVER["REMOTE_ADDR"];

        $getBook=Book::findOrFail($book_id);
        
        if (Auth::check()) {
            $user_id=Auth::User()->id;

            $getOrder=Order::where(function ($q) use ($user_id) {
                $q->where(['is_completed'=>0]);
            })->orWhere(function ($q) use ($ip) {
                $q->where(['ip'=>$ip,'is_completed'=>0]);
            })->first();

            if ($getOrder==null) {
                $order=new Order();
                $order->order_status_id=Order::ORDER_STATUS_NEW;
                $order->invoice_prefix='STHULA';
                $order->order_date=Date('Y-m-d');
                //  $order->user_id=$user_id;
                $order->is_completed=0;
                $order->order_key=Str::random(40);
                $order->ip=$ip;
                $order->order_amount=$getBook->price;
                $order->save();
                $userOrderId= $order->id;
            } else {
                $userOrderId= $getOrder->id;
            }

            $op=OrderItem::where(['book_id'=>$book_id,
                'order_id'=> $userOrderId,
            ])->first();

            if ($op==null) {
                $op=new OrderItem();
            }
            $op->order_id=$userOrderId;
            $op->cart_item_type=1;
            $op->quantity=$quantity;
            $op->price=$getBook->price;
            $op->unit_price=$getBook->price;
            $op->total_amount=$op->price*$op->quantity;
            $op->book_id=$book_id;
            $op->save();
        } else {
            //forguest user

            $getOrder=Order::where(['ip'=>$ip,'is_completed'=>0])
                ->first();

            if ($getOrder==null) {
                $order=new Order();
                $order->order_status_id=Order::ORDER_STATUS_NEW;
                $order->invoice_prefix='STHULA';
                $order->order_date=Date('Y-m-d');
                $order->is_completed=0;
                $order->order_key=Str::random(40);
                $order->ip=$ip;
                $order->order_amount=$getBook->price;
                $order->save();
                $userOrderId= $order->id;
            } else {
                $userOrderId= $getOrder->id;
            }

            $op=OrderItem::where(['book_id'=>$id,
                'order_id'=> $userOrderId,
            ])->first();

            if ($op==null) {
                $op=new OrderItem();
            }
            $op->order_id=$userOrderId;
            $op->cart_item_type=1;
            $op->quantity=$this->quantity;
            $op->price=$getBook->price;
            $op->unit_price=$getBook->price;
            $op->total_amount=$op->price*$op->quantity;
            $op->book_id=$book_id;
            $op->save();
        }

        return true;
    }
}
