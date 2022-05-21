<?php

namespace App\Http\Livewire\Frontend\User;

use Livewire\Component;
use App\VideoCourse;

class Coursedetail extends Component
{
	public $user_video_detail;

	public function mount($slug)
	{
		$this->user_video_detail= VideoCourse::
		                            where('slug',$slug)
		                            ->with('video_course_sections')
		                            ->firstOrFail();                         
	}

    public function render()
    {
        return view('livewire.frontend.user.coursedetail');
    }
}
