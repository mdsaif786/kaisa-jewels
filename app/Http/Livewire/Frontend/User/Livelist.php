<?php

namespace App\Http\Livewire\Frontend\User;

use Livewire\Component;
use App\LiveClass;

class Livelist extends Component
{
    public $user_live_classes;

    public function mount()
    {
        $this->user_live_classes= LiveClass::
                                        // where('user_id',auth()->id)
                                        with('languages', 'educators')
                                        ->withCount('live_class_lessons')
                                        ->take(2)
                                        ->get();
    }

    public function render()
    {
        return view('livewire.frontend.user.livelist')->extends('layouts.master');
    }
}
