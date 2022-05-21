<?php

namespace App\Http\Livewire\Frontend\LiveClasses;

use Livewire\Component;
use App\Models\BookCategory;
use App\Models\Language;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use App\Models\Book;
use App\Models\Author;
use App\Models\Binding;

class Listing extends Component
{
    use WithPagination;

    public $categories;
    public $skillLevel;
    public $cat=[];
    public $edu=[];
    public $lang=[];
    public $sort='';
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


    public function mount()
    {
         $this->categories=BookCategory::get();
         $this->langs=Language::get();
         $this->bindings=Binding::get();
         $this->authors=Author::get();

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
        //$live_classes= LiveClass::with('educators','languages','category');

        $books=Book::take(20)->get();

        // // Filter By Category
        // if($this->cat)
        //     $this->filterByCategory($live_classes);
        // // Filter By Educator
        // if($this->edu)
        //     $this->filterByEducator($live_classes);
        // //Filter by Language
        // if($this->lang)
        //     $this->filterByLanguage($live_classes);

        // // Individual Sorting
        // if($this->sort)
           // $this->sortBy($live_classes);

        return view('livewire.frontend.live-classes.listing',[
            'books'=>$books,

        ]);
    }
}
