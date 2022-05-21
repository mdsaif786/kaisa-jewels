<?php

namespace App\Http\Livewire\Frontend\User;

use Livewire\Component;
use App\VideoCourse;

class Courselist extends Component
{
	public $user_video_courses;

	public function mount()
	{
		$this->user_video_courses= VideoCourse::
		                                // where('user_id',auth()->id())
		                                with('languages','educators')
		                                ->withCount('video_lessons')
		                                ->take(2)
		                                ->get();
	}

    public function render()
    {
        return view('livewire.frontend.user.courselist');
    }
}
