<?php

namespace App\Http\Livewire\Frontend\Legal;

use Livewire\Component;

class PrivacyPolicy extends Component
{
    public function render()
    {
        return view('livewire.frontend.legal.privacy-policy')->extends('layouts.master');
    }
}
