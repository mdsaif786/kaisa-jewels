<?php

namespace App\Http\Livewire\Frontend\LiveClasses;

use Livewire\Component;
use App\LiveClass;

class LiveClassesSlider extends Component
{
    
    public $live_classes;

    public function mount()
    {
        $this->live_classes= LiveClass::with('languages','category','educators')
                                ->take(10)
                                ->get();

       // echo "<pre>";
        //print_r($this->video_courses->toArray());
        //die;

    }
    public function render()
    {
        return view('livewire.frontend.live-classes.live-classes-slider');
    }
}
