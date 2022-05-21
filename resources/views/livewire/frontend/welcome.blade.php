<div class="container">
    <div class="row">
        @if(!empty($topSliders))
            @foreach($topSliders as $key=>$topSlider)
                <div class="col-xs-12 col-sm-6 voffset2">
                    <a href="{{$topSlider->target_url}}" aria-label="MS_Roads_Book">
                        <div class="imgZoomWrap">
                            <img src="{{$topSlider->target_url}}" width="800" class="img-fluid" alt="">
                        </div>
                    </a>
                </div>
            @endforeach
        @endif
    </div>
    <div class="row">
        <div class="col-xs-12">
            <ul class="slickSwipe heroHomeSwipe">
                @if(!empty($belowSliders))
                    @foreach($belowSliders as $key=>$belowSlider)
                        <li>
                            <a href="{{$belowSlider->target_url}}" aria-label="shheldev">
                                <img src="{{$belowSlider->target_url}}" width="600" class="img-fluid" alt=""></a>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
</div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h6 class="text-uppercase">Recently Viewed</h6>
                <h5>Based on your browsing history</h5>
            </div>
            <div class="col-xs-12 voffset2">
                <ul class="slickSwipe lrItemSwipe">
                    @if(!empty($getBrowsingHistory))
                        @foreach($getBrowsingHistory as $history)
                            <li>
                            <article>
                            <div class="litem">
                                <a href="{{URL::to('/book/'.$history->book->slug)}}" aria-label="">
                                    <div class="imgZoomWrap">
                                        <img src="{{$history->book->image}}" class="img-fluid" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="ritem">
                                <a href="{{URL::to('/book/'.$history->book->slug)}}" class="titleLink">{{$history->name}}</a>
                                <div class="priceAttr">
                                    <div>
                                        <span class="stickOut">
                                            <i class="currency_item">$111</i>{{mt_rand(100,150)}}
                                             <i class="currency_item1">{{$history->book->symbol}}</i>{{$history->book->mrp}}
                                        </span>
                                        <span>
                                           <i class="currency_item1">{{$history->book->symbol}}</i>{{$history->book->price}}
                                        </span>
                                    </div>
                                    <div>{{$history->book->discount}} % off</div>
                                </div>
                                <div class="ratingAttr">
                                    <span class="starRatings">
                                        <u class="orangeTxt bold">4.8</u>
                                        <i class="active"></i>
                                        <i class="active"></i>
                                        <i class="active"></i>
                                        <i class="active"></i>
                                        <i></i>
                                    </span><br>
                                    <small>120 people</small>
                                </div>
                            </div>
                        </article>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="lgrayBg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h5>You may be interested in</h5>
                <!-- <h6 class="text-uppercase">Handpicked Products</h6> -->
            </div>
            <div class="col-xs-12 voffset3">
                <div class="slickSwipe productSwipe itemDisp">
                    @if (!empty($getHandpick))
                        @foreach($getHandpick as $handpick)
                            <article>
                                <a href="{{URL::to('/book/'.$handpick->slug)}}" aria-label="">
                                    <div class="imgZoomWrap">
                                        <img src="{{$handpick->image}}" class="img-fluid" alt="{{$handpick->name}}">
                                    </div>
                                </a>
                                <a href="{{URL::to('/book/'.$handpick->slug)}}" class="titleLink">{{$handpick->name}}</a>
                                <div class="priceAttr">
                                    <div>
                                        <span class="stickOut">
                                            <i class="currency_item1">{{$handpick->symbol}}</i>{{$handpick->mrp}}
                                         </span>
                                        <span><i class="currency_item1">{{$handpick->symbol}}</i>{{$handpick->price}}</span>
                                    </div>
                                    <div>{{$handpick->discount}}% off</div>
                                </div>
                                <div class="ratingAttr">
                            <span class="starRatings">
                                <u class="orangeTxt bold">4.8</u>
                                <i class="active"></i>
                                <i class="active"></i>
                                <i class="active"></i>
                                <i class="active"></i>
                                <i></i>
                            </span>
                                    <small>120 people</small>
                                </div>
                            </article>
                        @endforeach
                    @endif
                </div>
                <div class="text-center voffset2">
                    <div class="listButton text-center">
                        <a href="{{URL::to('/listing/handpick')}}" class="linkBtn">Explore more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="silverBg tabSecCntWrap">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h5>For the Love of Reading</h5>
                <div class="scrollTabs">
                    <ul class="tabsButtonSet swipInit noStyle text-uppercase">
                        <li class="active" data-tabnav="new_arrivals">New Arrivals</li>
                        <li data-tabnav="best_sellers">Best sellers</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="tabbedCntWrap active" id="showTab_new_arrivals">
                    <div class="scrollCntWrap">
                        <div class="flexGrid productGrid itemDisp">
                            @if(!empty($newArrivals))
                                @foreach($newArrivals as $new_arrival)
                                <div class="col6">
                                    <article>
                                        <a href="{{URL::to('/book/'.$new_arrival->slug)}}" aria-label="">
                                            <div class="imgZoomWrap">
                                                <img src="{{$new_arrival->image}}" class="img-fluid" alt="{{$new_arrival->name}}">
                                            </div>
                                        </a>
                                        <a href="{{URL::to('/book/'.$new_arrival->slug)}}" class="titleLink">{{$new_arrival->name}}</a>
                                        <div class="priceAttr">
                                            <div>
                                                <span class="stickOut"><i class="currency_item1">{{$new_arrival->symbol}}</i>{{$new_arrival->mrp}}</span>
                                                <span><i class="currency_item1">{{$new_arrival->symbol}}</i>{{$new_arrival->price}}</span>
                                            </div>
                                            <div>{{$new_arrival->discount}}% off</div>
                                        </div>
                                        <div class="ratingAttr">
                                            <span class="starRatings">
                                                <u class="orangeTxt bold">4.8</u>
                                                <i class="active"></i>
                                                <i class="active"></i>
                                                <i class="active"></i>
                                                <i class="active"></i>
                                                <i></i>
                                            </span>
                                            <small>120 people</small>
                                        </div>
                                    </article>
                                </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="text-center voffset2">
                        <div class="listButton text-center">
                            <a href="{{URL::to('/new-arrivals')}}" class="linkBtn">Browse all new arrivals</a>
                        </div>
                    </div>
                </div>
                <div class="tabbedCntWrap" id="showTab_best_sellers">
                    <div class="scrollCntWrap">
                        <div class="flexGrid productGrid itemDisp">
                            @if (!empty($bestSellers))
                                @foreach ($bestSellers as $best_sellers)
                                    <div class="col6">
                                        <article>
                                            <a href="{{URL::to('/book/'.$best_sellers->slug)}}" aria-label="">
                                                <div class="imgZoomWrap">
                                                    <img src="{{$best_sellers->image}}" class="img-fluid" alt="{{$best_sellers->name}}">
                                                </div>
                                            </a>
                                            <a href="{{URL::to('/book/'.$best_sellers->slug)}}" class="titleLink">{{$best_sellers->name}}</a>
                                            <div class="priceAttr">
                                                <div>
                                                    <span class="stickOut">
                                                        <i class="currency_item1">{{$best_sellers->symbol}}</i>
                                                        {{$best_sellers->mrp}}</span>
                                                    <span><i class="currency_item">{{$best_sellers->symbol}}</i>{{$best_sellers->price}}</span>
                                                </div>
                                                <div>{{$best_sellers->discount}}% off</div>
                                            </div>
                                            <div class="ratingAttr">
                                        <span class="starRatings">
                                            <u class="orangeTxt bold">4.8</u>
                                            <i class="active"></i>
                                            <i class="active"></i>
                                            <i class="active"></i>
                                            <i class="active"></i>
                                            <i></i>
                                        </span>
                                                <small>120 people</small>
                                            </div>
                                        </article>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="text-center voffset2">
                        <div class="listButton text-center">
                            <a href="{{URL::to('/listing/bestsellers')}}" class="linkBtn">Browse all best sellers</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="scrollCntWrap">
                    <div class="offersBoxGrid">
                        @forelse($blockOffer as $block_offer)
                        <a href="{{URL::to('/listing/offer?discount='.$block_offer->general_discount)}}">
                            <span>{{$block_offer->title}}</span>
                            <span>Shop now</span>
                        </a>
                        @empty
                        @endforelse
                        {{-- <a href="{{URL::to('/listing')}}">
                            <span>Nonfiction Sale 30% off select books</span>
                            <span>Shop now</span>
                        </a>
                        <a href="{{URL::to('/listing')}}">
                            <span>Offer of this month Buy 1 Get 1, 30% off</span>
                            <span>Shop now</span>
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<section class="lgrayBg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h5>All-time classics</h5>
                <h6 class="text-uppercase">DON'T MISS OUT</h6>
            </div>
            <div class="col-xs-12 voffset2">
                <div class="slickSwipe productSwipe itemDisp">
                    @if (!empty($classicses))
                        @foreach ($classicses as $key=>$classics)
                            <article>
                                <a href="{{URL::to('/book/'.$classics->slug)}}" aria-label="">
                                    <div class="imgZoomWrap">
                                        <img src="{{$classics->image}}" class="img-fluid" alt="">
                                    </div>
                                </a>
                                <a href="{{URl::to('/book/'.$classics->slug)}}" class="titleLink">The Book of Lost Names</a>
                                <div class="priceAttr">
                                    <div>
                                        <span class="stickOut"><i class="currency_item">$</i>{{$classics->mrp}}</span>
                                        <span><i class="currency_item">$</i>{{$classics->price}}</span>
                                    </div>
                                    <div>{{$classics->disccount}}% off</div>
                                </div>
                                <div class="ratingAttr">
                            <span class="starRatings">
                                <u class="orangeTxt bold">4.8</u>
                                <i class="active"></i>
                                <i class="active"></i>
                                <i class="active"></i>
                                <i class="active"></i>
                                <i></i>
                            </span>
                                    <small>120 people</small>
                                </div>
                            </article>
                        @endforeach
                    @endif
                </div>
                <div class="text-center voffset2">
                    <div class="listButton text-center">
                        <a href="{{URL::to('/listing/classics')}}" class="linkBtn">Explore more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section>
    <div class="container">
        <div class="row">
            @forelse($priceBlocke as $price_blocked)
            <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="{{URL::to('/listing/price?under='.(int)$price_blocked->price)}}" class="darkBox">
                    <h3><i class="currency_item1">{{$price_blocked->symbol}}</i> {{(int)$price_blocked->price}} store</h3>
                    <h5>Buy Books under {{$price_blocked->symbol}} {{(int)$price_blocked->price}}</h5>
                    <span>Shop Now</span>
                </a>
            </div>
            @empty
            @endforelse
            {{-- <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="{{URL::to('/listing?under=99')}}" class="darkBox">
                    <h3><i class="currency_item">$</i>99 store</h3>
                    <h5>Buy Books under $99</h5>
                    <span>Shop Now</span>
                </a>
            </div> --}}
            {{-- <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="{{URL::to('/listing?under=99')}}" class="darkBox">
                    <h3><i class="currency_item">$</i>99 store</h3>
                    <h5>Buy Books under $99</h5>
                    <span>Shop Now</span>
                </a>
            </div> --}}
            {{-- <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="{{URL::to('/listing?under=99')}}" class="darkBox">
                    <h3><i class="currency_item">$</i>99 store</h3>
                    <h5>Buy Books under $99</h5>
                    <span>Shop Now</span>
                </a>
            </div> --}}
        </div>
    </div>
</section> -->
<section class="feature-blog">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h5>From Our Blog</h5>
                <h6 class="text-uppercase">Recent articles</h6>
            </div>
            <div class="col-xs-12">
                <div class="row center-sm">
                   <div class="col-xs-6 col-md-3">
                        <article class="blogArticle">
                            <a href="#" target="_blank" aria-label="">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/blog-img-thumb.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <h5><a href="#">Patriot</a> | MAY 12, 2020</h5>
                            <h6>Read Like a Patriot: 9 Books of Tough Love
                            for America</h6>
                            <a href="#">Read full article</a>
                        </article>
                    </div>
                     <div class="col-xs-6 col-md-3">
                        <article class="blogArticle">
                            <a href="#" target="_blank" aria-label="">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/blog-img-thumb.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <h5><a href="#">Patriot</a> | MAY 12, 2020</h5>
                            <h6>Read Like a Patriot: 9 Books of Tough Love
                            for America</h6>
                            <a href="#">Read full article</a>
                        </article>
                    </div>
                     <div class="col-xs-6 col-md-3">
                        <article class="blogArticle">
                            <a href="#" target="_blank">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/blog-img-thumb.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <h5><a href="#">Patriot</a> | MAY 12, 2020</h5>
                            <h6>Read Like a Patriot: 9 Books of Tough Love
                            for America</h6>
                            <a href="#">Read full article</a>
                        </article>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <article class="blogArticle">
                            <a href="#" target="_blank" aria-label="">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/blog-img-thumb.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <h5><a href="#">Patriot</a> | MAY 12, 2020</h5>
                            <h6>Read Like a Patriot: 9 Books of Tough Love
                            for America</h6>
                            <a href="#">Read full article</a>
                        </article>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 voffset2 text-center">
                <div class="listButton">
                    <a href="#" class="linkBtn">Discover more articles</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="lgrayBg text-center">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h5>What our customer say</h5>
                <h6 class="text-uppercase">TESTIMONIALS</h6>
            </div>
            <div class="col-xs-12">
                <span class="icon-quote">"</span>
                <ul class="slickSwipe testimonialSwipe">
                    <li>
                        <h5>Realy great store</h5>
                        <blockquote>I am a huge Dan Brown fan and yes, it is possible that there is an overlap in the genre
i.e. theological, historical and conspiracy fiction.</blockquote>
                        <h6 class="bold voffset2">Manan Viswas</h6>
                        <h6>New Delhi, India</h6>
                    </li>
                    <li>
                        <h5>Realy great store</h5>
                        <blockquote>I am a huge Dan Brown fan and yes, it is possible that there is an overlap in the genre
i.e. theological, historical and conspiracy fiction.</blockquote>
                        <h6 class="bold voffset2">Manan Viswas</h6>
                        <h6>New Delhi, India</h6>
                    </li>
                    <li>
                        <h5>Realy great store</h5>
                        <blockquote>I am a huge Dan Brown fan and yes, it is possible that there is an overlap in the genre
i.e. theological, historical and conspiracy fiction.</blockquote>
                        <h6 class="bold voffset2">Manan Viswas</h6>
                        <h6>New Delhi, India</h6>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 voffset2 text-center">
                <div class="listButton">
                    <a href="#" class="linkBtn">Explore more stories</a>
                </div>
            </div>
        </div>
    </div>
</section>
