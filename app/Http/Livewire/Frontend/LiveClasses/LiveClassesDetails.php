<?php

namespace App\Http\Livewire\Frontend\LiveClasses;

use App\Models\Book;
use Livewire\Component;


class LiveClassesDetails extends Component
{
	public $live_class;
	public $live_related_class;
    /**
     * @var mixed
     */
    public $book;
    /**
     * @var Book[]|\LaravelIdea\Helper\App\Models\_BookCollection|mixed
     */
    public $relatedBooks;


    public function mount($slug)
	{
		$this->book=Book::where('slug',urldecode($slug))->first();
		$this->relatedBooks=Book::take(10)->get();

	}

    public function render()
    {
        return view('livewire.frontend.live-classes.live-classes-details');
    }

    public function increment()
    {

        $this->quantity++;
    }

    public function decrement()
    {
        $this->quantity++;
    }
}
