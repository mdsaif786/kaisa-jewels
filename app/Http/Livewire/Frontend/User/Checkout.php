<?php

namespace App\Http\Livewire\Frontend\User;

use App\Models\Zone;
use App\Models\Order;
use App\Models\Address;
use App\Models\Country;
use Livewire\Component;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Checkout extends Component
{
    use AuthorizesRequests;
    public $name;
    public $address_1;
    public $phone;
    public $country_id;
    public $city;
    public $zone_id;
    public $pincode;
    public $additional_note;
    public $is_default;
    public $user_id;
    
    public function mount()
    {
        $this->user_id = Auth::User()->id;
    }
    
    public function render()
    {
        $ip=$_SERVER["REMOTE_ADDR"];
        
        if (Auth::check()) {
            $user_id=Auth::User()->id;
            
            $getOrder=Order::where(function ($q) use ($user_id, $ip) {
                $q->where(['ip'=>$ip,'is_completed'=>0]);
            })->orWhere(function ($q) use ($ip) {
                $q->where(['ip'=>$ip,'is_completed'=>0]);
            })->first();
        } else {
            $getOrder=Order::where(['ip'=>$ip,'is_completed'=>0])
                            ->latest('id')
                            ->first();
        }

        if (!$getOrder) {
            abort(404);
        }

        $order_products=$getOrder->orderItem;
        $totalAmount=$order_products->sum('total_amount');
        $discountAmount=$getOrder->coupon_discount;
        $subTotal=$totalAmount-$discountAmount;
        $rozarpay_format= $subTotal*100;

        //User Address
        if (Auth::user()->default_address!=null) {
            $user_address = auth()->user()->addressWithLazy
                                ->where('id', Auth::user()->default_address)
                                ->first();
        } else {
            $user_address = false;
        }
      
   

        return view('livewire.frontend.user.checkout', [
            'totalAmount'=>$totalAmount,
            'discountAmount'=>$discountAmount,
            'order_id'=>$getOrder->id,
            'order_products'=>$order_products,
            'coupan_id' => $getOrder->coupon_id,
            'subTotal'=>$subTotal,
            'rozarpay_format'=>$rozarpay_format,
            'user_address' => $user_address,
        ])->extends('layouts.master');
        ;
    }
    public function storeAddress()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'address_1' => 'required',
            'country_id' => 'required',
            'zone_id' => 'required',
            'city' => 'required',
            'pincode' => 'required',
            'additional_note' => 'nullable',
            'phone' => 'required',

        ]);

        $validatedData['user_id']=Auth::id();
        $validatedData['created_at']=now();
        $validatedData['updated_at']=now();

        $address = Address::create($validatedData);
        if ($this->is_default) {
            $this->chooseDefaultAddress($address->id);
        }
        session()->flash('message', 'New Address has be added.');
    }

    public function chooseDefaultAddress($id)
    {
        auth()->user()->update(['default_address' => $id]);
    }
}
