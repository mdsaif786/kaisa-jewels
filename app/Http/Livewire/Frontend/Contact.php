<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\ContactUs;

class Contact extends Component
{
    public $full_name;
    public $email;
    public $mobile;
    public $message;

    public function saveContactUsRequest()
    {
        $this->validate([
            'full_name' => 'required|max:50',
            'email' => 'required|email',
            'mobile' => 'required|regex:/[0-9]{10}/|max:20',
            'message' => 'required',
        ]);

        
        ContactUs::create([
            'full_name' => $this->full_name,
            'email' => $this->email,
            'phone' => $this->mobile,
            'message' => $this->message,
            'status'=>1,
        ]);

        session()->flash('message', 'Thank You !! <br> Your Request Capture Successfully.');

        return redirect()->to('/contact');
    }

    public function render()
    {
        return view('livewire.frontend.contact')->extends('layouts.master');
    }
}
