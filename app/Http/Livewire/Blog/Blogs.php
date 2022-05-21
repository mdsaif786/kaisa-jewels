<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;
use App\Models\BlogCategory;
use App\Models\Blog;

class Blogs extends Component
{
    public $blogs_category;
    public $cat='';
    // public $blogs;
    protected $updatesQueryString=['cat' => ['except' => '']];
    
    public function mount()
    {
        $this->blogs_category= BlogCategory::latest()->take(6)->get();
        $this->cat = request()->query('cat', $this->cat);

        // echo "<pre>";
        // print_r($this->blogs_category->toArray());
        // die;
    }

    public function render()
    {
        return view('livewire.blog.blogs', [
            'blogs' => $this->cat ? Blog::where('blog_category_id', $this->cat)->get() : Blog::take(10)->get(),
        ])->extends('layouts.master');
        ;
    }
}
