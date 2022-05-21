<?php

namespace App\Http\Livewire\Frontend\User;

use Livewire\Component;
use Auth;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\CourseWishList;
use App\Models\Coupon;
use App\Services\CustomerWishList;

class Cart extends Component
{
    public $cart_count;
    public $coupon_code = '';
    public $is_valid_coupon = false;
    public $coupon_discount;
    public $cart_order;
    public $order_item;
    public $order_id;
    public $deleteMode = false;
    public $item_id;

    public function render()
    {
        $ip=$_SERVER["REMOTE_ADDR"];
        
        if (Auth::check()) {
            $user_id=Auth::User()->id;
            
            $getOrder=Order::with(['orderItem.book.category'])->where(function ($q) use ($user_id, $ip) {
                $q->where(['ip'=>$ip,'is_completed'=>0]);
            })->orWhere(function ($q) use ($ip) {
                $q->where(['ip'=>$ip,'is_completed'=>0]);
            })->first();
        } else {
            $getOrder=Order::with(['orderItem.book.category'])->where(['ip'=>$ip,'is_completed'=>0])
                            ->latest('id')
                            ->first();
        }


        $this->cart_order = $getOrder;

        $order_products= $getOrder ? $getOrder->orderItem : null;

        // echo "<pre>";
        // print_r($order_products->toArray());
        // die;
      
        $this->cart_count = $order_products ? $order_products->count(): 0;
       
        if (request()->query('coupon_code')!=null and $this->coupon_code=='') {
            $this->coupon_code = request()->query('coupon_code');
            $this->applyCoupon();
        }
        return view('livewire.frontend.user.cart', [
          'order_products'=>$order_products,
          'getOrder'=>$getOrder,
          'is_valid_coupon' => $this->is_valid_coupon,
          'coupon_discount' => $this->coupon_discount,
          'coupon_code' => $this->coupon_code,
        ])->extends('layouts.master');
        ;
    }



    public function removedCartItem($order_id, $order_item)
    {
        $this->order_item = $order_item;
        $this->order_id = $order_id;
        $this->deleteMode = true;
        $this->delete();
    }

    public function delete()
    {
        if ($this->deleteMode) {
            OrderItem::findOrFail($this->order_item)->forceDelete();

            $doesntExist=OrderItem::where('order_id', $this->order_id)->doesntExist();

            if ($doesntExist) {
                Order::findOrFail($this->order_id)->forceDelete();
                --$this->cart_count;
            }
        }
    }

    public function cartItemMoveToWishList($book_id, $order_id, $order_item)
    {
        (new CustomerWishList())->addToWish($book_id);

        $this->order_item = $order_item;
        $this->order_id = $order_id;
        $this->deleteMode = true;
        $this->delete();

        return session()->flash('message', 'Book move to wishList');
    }
    
    
    public function applyCoupon()
    {
        if (Coupon::where('coupon_code', $this->coupon_code)->exists()) {
            $this->coupon_discount=Coupon::where('coupon_code', $this->coupon_code)->first();
            $this->cart_order->update(['coupon_discount' => $this->coupon_discount->discount,'coupon_id' => $this->coupon_discount->id]);
            $this->is_valid_coupon = true;
        }
    }
}
