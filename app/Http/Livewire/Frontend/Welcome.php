<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Book;
use Livewire\Component;
use App\Models\Blog;
use App\Models\Slider;
use App\Models\BlockOffer;
use App\Models\PriceBlock;
use App\Models\RecentlyViewed;

class Welcome extends Component
{
    public $classByCats;
    public $videoCoursesByExamCats;
    public $educators_list;
    public $latest_articles;
    public $success_reviews;
    public $topSliders;
    public $belowSliders;
    public $getBrowsingHistory;
    public $getHandpick;
    public $blockOffer;
    public $priceBlocke;
    /**
     * @var Book[]|\LaravelIdea\Helper\App\Models\_BookCollection|mixed
     */
    public $newArrivals;
    /**
     * @var mixed
     */
    public $bestSellers;
    /**
     * @var Book[]|\LaravelIdea\Helper\App\Models\_BookCollection|mixed
     */
    public $classicses;

    public function mount()
    {
        $this->topSliders = Slider::topSlider()->take(2)->get();
        $this->belowSliders = Slider::belowSlider()->get();
        $this->getBrowsingHistory =RecentlyViewed::with(['book'])
                        ->where('ip', $_SERVER["REMOTE_ADDR"])->get();
        $this->getHandpick = Book::activeHandpicked()->take(10)->get();
        $this->newArrivals = Book::activeNewArrivals()->take(15)->get();
        $this->bestSellers = Book::activeBestSellers()->take(20)->get();
        $this->classicses = Book::activeAllTimeClassic()->take(20)->get();
        $this->priceBlocke=PriceBlock::where('status', 1)->get();
        $this->blockOffer=BlockOffer::where('status', 1)->get();

        // $recent=RecentlyViewed::with(['book'])->where('ip', $_SERVER["REMOTE_ADDR"])->get();

        // dd($recent);
    }
    public function render()
    {
        return view('livewire.frontend.welcome')
              ->extends('layouts.master');
    }
}
