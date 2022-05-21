<?php

namespace App\Http\Livewire\Frontend\Testimonial;

use Livewire\Component;
use App\Models\BookReview;

class Index extends Component
{
    public $testimonials;
    public $liveReviews;

    public function mount()
    {
        $this->testimonials= BookReview::with('user')
                                                ->latest()
                                                ->take(10)
                                                ->get();
    }

    public function render()
    {
        return view('livewire.frontend.testimonial.index')
                    ->extends('layouts.master');
    }
}
