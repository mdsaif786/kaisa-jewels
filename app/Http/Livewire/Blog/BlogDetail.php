<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;
use App\Models\Blog;

class BlogDetail extends Component
{
    public $blog_detail;

    /**
     * Method mount
     *
     * @param $slug $slug [explicite description]
     *
     * @return mixed
     */
    public function mount($slug)
    {
        $this->blog_detail = Blog::where('slug', $slug)
            ->with('blogauthors', 'blog_category')
            ->first();
    }
    /**
     * Method render
     *
     * @return void
     */
    /**
     * Method render
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.blog.blog-detail');
    }
}
