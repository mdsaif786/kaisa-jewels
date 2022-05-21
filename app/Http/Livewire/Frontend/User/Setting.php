<?php

namespace App\Http\Livewire\Frontend\User;

use Auth;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class Setting extends Component
{
    use WithFileUploads;
    public $user_id;
    public $avatar;
    public $name;
    public $email;
    public $phone;
    public $new_password;

    public function mount()
    {
        $this->name= auth()->user()->name;
        $this->email = auth()->user()->email;
        $this->phone = auth()->user()->phone;
        $this->user_id= Auth::id();
    }
    
    protected $rules = [
            'name' => 'required',
            'phone' => 'required|regex:/[0-9]{10}/|max:10',
            'avatar' => 'image|max:1024|nullable',
    ];

    public function updateProfile()
    {
        $this->validate();
        $user=User::findOrFail($this->user_id);

        if ($this->avatar) {
            $file_name = $this->avatar->storePublicly('avatar', 's3');
            $file_url = Storage::disk('s3')->url($file_name);
        } else {
            $file_url =$user->profile_photo;
        }
        if ($this->new_password) {
            $password=Hash::make($this->new_password);
        } else {
            $password=$user->password;
        }
       
        $user->update([
            'name' => $this->name,
            'phone' => $this->phone,
            'profile_photo' => $file_url,
            'password' => $password,
        ]);

        session()->flash('message', 'Your Profile update Successfully.');

        return redirect()->to('/setting');
    }

    public function render()
    {
        return view('livewire.frontend.user.setting')->extends('layouts.master');
    }


    
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
