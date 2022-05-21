<?php

namespace App\Http\Livewire;

use App\Models\Book;
use App\Models\OrderItem;
use Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use App\Models\Order;
use App\Services\CustomerWishList;

class ChildComponentForCart extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */

    public $quantity=1;
    /**
     * @var mixed
     */
    public $book_id;

    public function mount($id)
    {
        $this->book_id=$id;
    }

    public function render()
    {
        return view('livewire.child-component-for-cart');
    }

    public function increment()
    {
        $this->quantity++;
    }

    public function decrement()
    {
        if ($this->quantity>1) {
            $this->quantity--;
        }
    }

    public function addToCart($id)
    {

        //price - actual price
        //unit price -- price-gst amount

        // dd($id);

        $ip=$_SERVER["REMOTE_ADDR"];

        $getBook=Book::findOrFail($id);
        
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
            $op->book_id=$id;
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
            $op->book_id=$id;
            $op->save();
        }

        return redirect()->to('/cart');
    }


    public function buyNow($id)
    {
        $ip=$_SERVER["REMOTE_ADDR"];

        $getBook=Book::findOrFail($id);
        
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
            $op->book_id=$id;
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
            $op->book_id=$id;
            $op->save();
        }

        return redirect()->to('/checkout');
    }


    public function bookAddToWishList()
    {
        (new CustomerWishList())->addToWish($this->book_id);

        return session()->flash('message', 'Book Added in wishList');
    }
}
