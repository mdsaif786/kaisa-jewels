<?php

namespace App\Http\Livewire\Frontend\User;

use Livewire\Component;
use App\LiveClass;

class Livedetail extends Component
{
    public $user_live_detail;
    
    public function mount($slug)
    {
        $this->user_live_detail= LiveClass::
                                    where('slug', $slug)
                                    ->with('live_class_section')
                                    ->firstOrFail();
    }

    public function render()
    {
        return view('livewire.frontend.user.livedetail')->extends('layouts.master');
    }
}
