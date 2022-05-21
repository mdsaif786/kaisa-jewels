<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\BookCategory;
use App\Models\Language;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use App\Models\Book;
use App\Models\Author;
use App\Models\Binding;
use App\Models\SearchKeyword;
use Auth;

class Search extends Component
{
    use WithPagination;

    public $categories;
    public $skillLevel;
    public $cat=[];
    public $edu=[];
    public $lang=[];
    public $sort='';
    public $q='';
    protected $updatesQueryString=[
        'cat' => ['except' => ''],
        'edu' => ['except' => ''],
        'lang' => ['except' => ''],
        'page' => ['except' => 1],
        'sort' => ['except' => ''],
    ];
    /**
     * @var Language[]|\LaravelIdea\Helper\App\Models\_LanguageCollection|mixed
     */
    public $langs;
    /**
     * @var Binding[]|\LaravelIdea\Helper\App\Models\_BindingCollection|mixed
     */
    public $bindings;
    /**
     * @var Author[]|\LaravelIdea\Helper\App\Models\_AuthorCollection|mixed
     */
    public $authors;


    public function mount(Request $request)
    {
        $this->categories=BookCategory::get();
        $this->langs=Language::get();
        $this->bindings=Binding::get();
        $this->authors=Author::get();
        $this->q=$request->q ?? '';
    }

    public function updating($fields)
    {
        //  $this->resetPage();
    }

    public function filterByCategory($live_classes)
    {
        // return $live_classes->whereIn('category_id',$this->cat);
    }

    public function filterByEducator($live_classes)
    {
        // return $live_classes->whereHas('educators', function($query){
        //     $query->whereIn('id',$this->edu);
        // });
    }
    public function filterByLanguage($live_classes)
    {
        // return $live_classes->whereHas('languages',function($query){
        //     $query->whereIn('id',$this->lang);
        // });
    }

    public function sortBy($live_classes)
    {
    }
    public function render()
    {
        $searchTerms='%'. $this->q .'%';

        $searchKeyword=new SearchKeyword();
        $searchKeyword->ip= $_SERVER["REMOTE_ADDR"];
        $searchKeyword->keyword_name=$this->q ?? '';

        if (Auth::check()) {
            $searchKeyword->user_id=\Auth::id();
        }
        $searchKeyword->save();
    
        $books= Book::select('id', 'slug', 'name', 'mrp', 'price', 'image', 'book_authors_id', 'publisher_id', 'category_id', 'sub_category_id')
                            ->where('name', 'LIKE', $searchTerms)
                            ->orWhere('description', 'LIKE', $searchTerms)
                            ->orWhere('price', 'LIKE', $searchTerms)
                            ->orWhere('isbn', 'LIKE', $searchTerms)
                            ->orWhere('isbn_10', 'LIKE', $searchTerms)
                            ->orWhere('isbn_30', 'LIKE', $searchTerms)
                            ->orWhere('publication_city_or_country', 'LIKE', $searchTerms)
                            ->orWhere('handpicked', 'LIKE', $searchTerms)
                            ->orWhere('new_arrival', 'LIKE', $searchTerms)
                            ->orWhereHas('category', function ($q) use ($searchTerms) {
                                $q->where('name', 'LIKE', $searchTerms);
                            })->orWhereHas('book_authors', function ($q) use ($searchTerms) {
                                $q->where('name', 'LIKE', $searchTerms);
                            })->orWhereHas('category', function ($q) use ($searchTerms) {
                                $q->where('name', 'LIKE', $searchTerms);
                            })
                            ->get();
 

        return view('livewire.frontend.search', [
            'books'=>$books,
            'no_of_results'=>count($books) ?? 0,
            'searchTerms'=>$this->q ?? '',
        ])->extends('layouts.master');
        ;
    }
}
