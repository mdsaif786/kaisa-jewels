<?php

namespace App\Http\Livewire\Frontend\Book;

use Livewire\Component;
use App\Models\BookCategory;
use App\Models\Language;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use App\Models\Book;
use App\Models\Author;
use App\Models\Binding;
use Str;

class Listing extends Component
{
    use WithPagination;

    public $categories;
    public $skillLevel;
    public $cat=[];
    public $edu=[];
    public $langFilter=[];
    public $sort='';
    public $optinal_slug='';
    public $bindinglist=[];
    public $authorFilter=[];
    public $authors;
    public $langs;
    protected $updatesQueryString=[
        'edu' => ['except' => ''],
        'langFilter' => ['except' => ''],
        'page' => ['except' => 1],
        'sort' => ['except' => ''],
        'cat' =>['except' =>''],
        'bindinglist'=>['except'=>''],
        'authorFilter'=>['except'=>''],
    ];
    
    
    public $bindings;
   
    public function mount($slug=null)
    {
        $this->optinal_slug=$slug;

        // dd($this->optinal_slug);
        if ($this->optinal_slug==null) {
            // dd(\Route::current()->getName());
            $url=str_replace('frontend.', '', \Route::current()->getName());

            // dd($url);
            if (in_array($url, ['new-arrivals'])) {
                $this->optinal_slug=Str::ucfirst(str_replace('-', ' ', $url));
            }
        }

        $this->categories=BookCategory::get();
        $this->langs=Language::get();
        $this->bindings=Binding::get();
        $this->authors=Author::get();
    }

    public function updating($fields)
    {
        //  $this->resetPage();
    }

    public function filterByCategory($books)
    {
        return $books->whereHas('category', fn ($q) =>$q->whereIn('slug', $this->cat));
    }

    public function filterByLanguage($live_classes)
    {
        return $live_classes->whereHas('language', function ($query) {
            $query->whereIn('name', $this->langFilter);
        });
    }

    public function filterByBinding($books)
    {
        return $books->whereHas('binding_types', fn ($q) =>$q->whereIn('name', $this->bindinglist));
    }

    public function filterBookAuthors($books)
    {
        return $books->whereHas('book_authors', fn ($q) =>$q->whereIn('name', $this->authorFilter));
    }

    public function sortBy($live_classes)
    {
        // if($this->sort == 'most_popular')
        //     return $live_classes->orderByDesc('no_of_enroll_student');
        // if($this->sort == 'price_lowest')
        //     return $live_classes->orderBy('price');
        // if($this->sort == 'price_highest')
        //     return $live_classes->orderByDesc('price');
        // if($this->sort =='newest')
        //     return $live_classes->latest();
        // if($this->sort == 'oldest')
        //     return $live_classes->oldest();
    }
    public function render()
    {
        $books=Book::query();

        if ($this->optinal_slug==='handpick') {
            $books=$books->activeHandpicked();
            $this->optinal_slug='Handpick Book';
        }

        if ($this->optinal_slug==='New arrivals') {
            $books=$books->activeNewArrivals();
        }

        if ($this->optinal_slug==='bestsellers') {
            $books=$books->activeBestSellers();
            $this->optinal_slug='Best Sellers';
        }

        if ($this->optinal_slug==='classics') {
            $books=$books->activeAllTimeClassic();
            $this->optinal_slug='All-time classics';
        }

        if ($this->optinal_slug==='offer') {
            $getDiscount=$_GET['discount'];
            $books=$books->where('discount', '<=', $getDiscount);
            $this->optinal_slug='Sale Upto' .' '.$getDiscount .'%';
        }

        if ($this->optinal_slug==='price') {
            $under_amount=$_GET['under'];
            $books=$books->where('price', '<=', $under_amount);
            $this->optinal_slug=$under_amount .' '.'STORE';
        }

        if ($this->cat) {
            $this->filterByCategory($books);
        }

        if ($this->bindinglist) {
            $this->filterByBinding($books);
        }

        if ($this->authorFilter) {
            $this->filterBookAuthors($books);
        }

        if ($this->langFilter) {
            $this->filterByLanguage($books);
        }

        // dd($this->langFilter);
        $books=$books->take(50)->get();

        return view('livewire.frontend.book.listing', [
            'books'=>$books,
            'bred_cats'=> BookCategory::whereIn('slug', $this->cat)->get(),
        ])->extends('layouts.master');
        ;
    }
}
