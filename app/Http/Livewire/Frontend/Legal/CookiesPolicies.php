<?php

namespace App\Http\Livewire\Frontend\Legal;

use Livewire\Component;

class CookiesPolicies extends Component
{
    public function render()
    {
        return view('livewire.frontend.legal.cookies-policies')
                ->extends('layouts.master');
    }
}
