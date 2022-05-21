<?php

namespace App\Http\Livewire\Frontend\User;

use App\Models\Zone;
use App\Models\Country;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Address as UserAddress;

class Address extends Component
{
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
    public $address_2;
    public $landmark;
    public $callBackToCheckout=false;


    public function mount(Request $request)
    {
        // dd($request->input('t'));

        if ($request->has('t')) {
            $this->callBackToCheckout=true;
        }
    }

    public function render()
    {
        //User Address
        if (Auth::user()->default_address!=null) {
            $user_address = auth()->user()->address->where('id', Auth::user()->default_address)->first();
        } else {
            $user_address = false;
        }
      
        $addresses = auth()->user()->addressWithLazy()->get();

    
        return view('livewire.frontend.user.address', [
            'addresses' => $addresses,
            'user_address' => $user_address,
            'country_list' => Country::get(),
            'zone_list' => Zone::where('country_id', $this->country_id)->get(),
        ])->extends('layouts.master');
    }



    public function storeAddress()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'address_1' => 'required',
            'country_id' =>['required','exists:countries,id'],
            'zone_id' => ['required','exists:zones,id'],
            'city' => 'required',
            'pincode' => 'required',
            'additional_note' => 'nullable',
            'phone' => 'required',
            'landmark'=>'nullable',

        ], [
            'country_id.required'=>'please select country',
            'zone_id.required'=>'please select Zone/State',
        ]);

        $validatedData['user_id']=Auth::id();
        $validatedData['created_at']=now();
        $validatedData['updated_at']=now();
        
        $address = UserAddress::create($validatedData);
        if ($this->is_default) {
            $this->chooseDefaultAddress($address->id);
        }
        session()->flash('message', 'Address Add Successfully');
        $this->reset();
        return redirect()->to('/address');
    }

    public function chooseDefaultAddress(Request $request, $id)
    {
        auth()->user()->update(['default_address' => $id]);
       
        if ($this->callBackToCheckout) {
            return redirect()->to('/checkout');
        }
    }


    public function removeAddress($id)
    {
        $address=UserAddress::where('id', $id)->first();
      
        if ($address) {
            $address->delete();
        }

        session()->flash('message', 'Address delete Successfully');
      
        return redirect()->to('/address');
    }
}
