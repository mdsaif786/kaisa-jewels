<?php

namespace App\Http\Livewire\Frontend\User;

use App\Models\Order;
use Livewire\Component;
use Auth;
use Illuminate\Http\Request;
use App\Models\StaticModel;
use Carbon\Carbon;

class Thankyou extends Component
{
    public $order;
    public $shopping_item;
    public $total_gst_amount;
    public $total_item_amount;

    public function mount(Request $request)
    {
        if ($request->has('order_id')) {
            $this->order=Order::findOrFail($request->input('order_id'));

            $this->shopping_item=$this->order->orderItem;
            $this->total_gst_amount=$this->shopping_item->sum('gst_amount');
            $this->total_item_amount=$this->shopping_item->sum('price');
            if (!$this->order->is_completed) {
                $this->order->update([
                        'payment_reference'=>$request->input('payment_reference'),
                        'payment'=>$request->input('payment_reference'),
                        'is_completed'=>1,
                        'total_book_amount'=>$this->total_item_amount,
                        'gst_amount'=>$this->total_gst_amount,
                        'date_modified'=>now(),
                        'order_amount'=>$this->total_item_amount-$this->order->coupon_discount,
                        'invoice_no'=>StaticModel::generate_invoice_number(),
                        'user_id'=>auth::id(),
                        'payment_status'=>Order::PAYMENT_STATUS_AS_TEXT['Paid'],
                        'user_agent'=>$request->userAgent(),
                        'payment_method'=>$request->input('payment_method')
                    ]);
            }
        }
    }

    public function render()
    {
        return view('livewire.frontend.user.thankyou')
            ->extends('layouts.master');
    }
}
