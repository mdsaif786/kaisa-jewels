<?php

namespace App\Http\Livewire\Frontend\Book;

use Livewire\Component;
use App\Models\Book;
use App\Models\RecentlyViewed;
use Auth;
use \DateTimeInterface;
use Carbon\Carbon;
use App\Models\BookReview;

class Detail extends Component
{
    public $live_class;
    public $live_related_class;
    public $book_id;
    public $getBookReviews;
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
        $this->book=Book::where('slug', urldecode($slug))->first();
        $this->book->increment('no_of_viewed');
        $this->book->save();
        $this->relatedBooks=Book::take(10)->get();
        $this->book_id=$this->book->id;
        $this->handleRecentlyViewed();

        $this->getBookReviews=BookReview::with(['user'])->get();


        // dd($this->getBookReviews);
    }

    public function render()
    {
        return view('livewire.frontend.book.detail')->extends('layouts.master');
    }

    public function increment()
    {
        $this->quantity++;
    }

    public function decrement()
    {
        $this->quantity++;
    }

    private function handleRecentlyViewed()
    {
        $ip=$_SERVER["REMOTE_ADDR"];
        if (Auth::check()) {
            $user_id=Auth::User()->id;
            $is_records_exist=RecentlyViewed::where(function ($q) use ($user_id) {
                $q->where(['user_id'=>$user_id,'book_id'=>$this->book_id])->where('date_time', '>', Carbon::now()->subHours(3)->toDateTimeString());
            })->orWhere(function ($q) use ($ip) {
                $q->where('date_time', '>', Carbon::now()->subHours(3)->toDateTimeString())
                ->where(['ip'=>$ip,'book_id'=>$this->book_id]);
            })->first();
        } else {
            $is_records_exist=RecentlyViewed::where('created_at', '>', Carbon::now()->subHours(3)->toDateTimeString())
               ->where(['ip'=>$ip,'book_id'=>$this->book_id])
              ->first();
        }

        if ($is_records_exist) {
            $is_records_exist->increment('no_of_times');
            $is_records_exist->save();
        } else {
            $recently_viewed= new RecentlyViewed();
            $recently_viewed->date_time=Carbon::now();
            $recently_viewed->book_id=$this->book_id;
            $recently_viewed->url=url()->full();
            $recently_viewed->ip=$ip;
            $recently_viewed->no_of_times=1;
            if (Auth::check()) {
                $recently_viewed->user_id=$user_id;
            }
            $recently_viewed->save();
        }
    }
}
