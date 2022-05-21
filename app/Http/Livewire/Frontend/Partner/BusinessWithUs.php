<?php

namespace App\Http\Livewire\Frontend\Partner;

use Livewire\Component;
use App\Models\BussinessWithUs as BusinessWithMe;

class BusinessWithUs extends Component
{
    public $full_name;
    public $email;
    public $mobile;
    public $message;
    public $company_name;
    public $city_name;

    public function saveBusinessWithUsRequest()
    {
        $this->validate([
            'full_name' => 'required|max:50',
            'email' => 'required|email',
            'mobile' => 'required|regex:/[0-9]{10}/|max:20',
            'company_name' => 'required',
            'city_name'=>'required',
        ]);

        
        BusinessWithMe::create([
            'full_name' => $this->full_name,
            'email' => $this->email,
            'mobile' => $this->mobile,
            'message' => $this->message,
            'company_name'=>$this->company_name,
            'city_name'=>$this->city_name,
            'status'=>1,
        ]);

        session()->flash('message', 'Thank You !! <br> Your Request Submitted Successfully.');

        return redirect()->to('/business-with-us');
    }

    public function render()
    {
        return view('livewire.frontend.partner.business-with-us')->extends('layouts.master');
    }
}
