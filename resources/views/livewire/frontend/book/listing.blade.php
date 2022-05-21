@section('title','Book Listing')
<div class="stickyMain">
    <div class="stickyNavTop filterTop">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="scrollTabs">
                        <ul class="listingFilterTab">
                            <li>Filter By</li>
                            <li><span dataFilter="filter_categories">Categories</span></li>
                            <li><span dataFilter="filter_binding">Binding</span></li>
                            <li><span dataFilter="filter_author">Author</span></li>
                            <li><span dataFilter="filter_language">Language</span></li>
                            <li><span dataFilter="filter_price">Price</span></li>
                            <li><span dataFilter="filter_sort_by">Sort By</span></li>
                        </ul>
                        <div class="listingFilterWrap">
                            <span class="closeTime base" id="closeFilterBar">X close</span>
                            <div class="filterContentDisp" id="show_filter_categories">
                                <ul class="flex4col">
                                   @if ($categories)
                                       @foreach ($categories as $category)
                                            <li>
                                                <label for="cat_{{$category->id}}" class="inRadio">{{$category->name}}
                                                <input wire:model="cat" type="checkbox" id="cat_{{$category->id}}" value="{{$category->slug}}"><span class="checkRadio"></span>
                                               </label>
                                            </li>
                                       @endforeach
                                   @endif
                                </ul>
                            </div>
                            <div class="filterContentDisp" id="show_filter_binding">
                                <ul class="flex4col">
                                    @if ($bindings)
                                        @foreach ($bindings as $binding)
                                            <li>
                                                <label for="bind_{{$binding->id}}" class="inRadio">{{$binding->name}}
                                                <input type="checkbox" wire:model="bindinglist" 
                                                    id="bind_{{$binding->id}}" 
                                                    value="{{$binding->name}}">
                                                    <span class="checkRadio"></span>
                                                </label>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                            <div class="filterContentDisp" id="show_filter_author">
                                <ul class="flex4col">
                                    @if ($authors)
                                        @foreach ($authors as $author)
                                            <li>
                                                <label for="author_{{$author->id}}" class="inRadio">{{$author->name}}
                                                <input wire:model="authorFilter" type="checkbox" name="authorlist" id="author_{{$author->id}}" value="{{$author->name}}"><span class="checkRadio"></span></label>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                            <div class="filterContentDisp" id="show_filter_language">
                                <ul class="flex4col">
                                    @if(!empty($langs))
                                    @foreach ($langs as $key=>$lang)
                                    <li>
                                        <label for="language{{$lang->id}}" class="inCheck">
                                            {{$lang->name}}
                                            <input type="checkbox"
                                            name="language_checked"
                                            wire:model="langFilter"
                                            value="{{$lang->name}}"
                                            id="language{{$lang->id}}">
                                            <span class="checkme"></span>
                                        </label>
                                    </li>
                                    @endforeach
                                    @endif
                                </ul>
                            </div>
                            <div class="filterContentDisp" id="show_filter_price">
                                <ul class="flex4col">

                                    {{-- <li>Under <i class="currency_item">₹</i>100</li>
                                    <li><i class="currency_item">₹</i>101 - 250</li>
                                    <li><i class="currency_item">₹</i>251 - 500</li>
                                    <li><i class="currency_item">₹</i>500 - 800</li>
                                    <li><i class="currency_item">₹</i>801 - 1000</li>
                                    <li><i class="currency_item">₹</i>1001 - 2500</li>
                                    <li><i class="currency_item">₹</i>2501 -5000</li>
                                    <li><i class="currency_item">₹</i>5001 - 10000</li> --}}
                                    <li>
                                        <label for="sort_most_popular" class="inRadio">
                                            <i class="currency_item"> ₹</i>10- 100
                                        <input type="checkbox" name="sortbyfilter" id="sort_most_popular" value="most_popular" ><span class="checkRadio">
                                        </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="sort_most_popular" class="inRadio">
                                            <i class="currency_item"> ₹</i>101 -250
                                        <input type="checkbox" name="sortbyfilter" id="sort_most_popular" value="most_popular" ><span class="checkRadio">
                                        </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="sort_most_popular" class="inRadio">
                                            <i class="currency_item"> ₹</i>251 -500
                                        <input type="checkbox" name="sortbyfilter" id="sort_most_popular" value="most_popular" ><span class="checkRadio">
                                        </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="sort_most_popular" class="inRadio">
                                            <i class="currency_item"> ₹</i>500 -800
                                        <input type="checkbox" name="sortbyfilter" id="sort_most_popular" value="most_popular" ><span class="checkRadio">
                                        </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="sort_most_popular" class="inRadio">
                                            <i class="currency_item"> ₹</i>8001 - 1000
                                        <input type="checkbox" name="sortbyfilter" id="sort_most_popular" value="most_popular" ><span class="checkRadio">
                                        </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="sort_most_popular" class="inRadio">
                                            <i class="currency_item"> ₹</i>1001 - 2500
                                        <input type="checkbox" name="sortbyfilter" id="sort_most_popular" value="most_popular" ><span class="checkRadio">
                                        </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="sort_most_popular" class="inRadio">
                                            <i class="currency_item"> ₹</i>2501 - 5000
                                        <input type="checkbox" name="sortbyfilter" id="sort_most_popular" value="most_popular" ><span class="checkRadio">
                                        </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="sort_most_popular" class="inRadio">
                                            <i class="currency_item"> ₹</i>5001 -10000
                                        <input type="checkbox" name="sortbyfilter" id="sort_most_popular" value="most_popular" ><span class="checkRadio">
                                        </span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="filterContentDisp" id="show_filter_sort_by">
                                <ul class="flex4col">
                                    <li>
                                        <label for="sort_most_popular" class="inRadio">Most popular
                                        <input type="radio" name="sortbyfilter" id="sort_most_popular" value="most_popular" wire:model="sort"><span class="checkRadio"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="sort_upcoming" class="inRadio">Upcoming
                                        <input type="radio" name="sortbyfilter" id="sort_upcoming" value="upcoming" wire:model="sort"><span class="checkRadio"></span></label>
                                    </li>
                                    <li>
                                        <label for="sort_course_duration" class="inRadio">Course duration
                                        <input type="radio" name="sortbyfilter" id="sort_course_duration" value="course_duration" wire:model="sort"><span class="checkRadio"></span></label>
                                    </li>
                                    <li>
                                        <label for="sort_price_lowest" class="inRadio">Price: Low to high
                                        <input type="radio" name="sortbyfilter" id="sort_price_lowest" value="price_lowest" wire:model="sort"><span class="checkRadio"></span></label>
                                    </li>
                                    <li>
                                        <label for="sort_price_highest" class="inRadio">Price: Hight to low
                                        <input type="radio" name="sortbyfilter" id="sort_price_highest" value="price_highest" wire:model="sort"><span class="checkRadio"></span></label>
                                    </li>
                                    <li>
                                        <label for="sort_newest" class="inRadio">Newest
                                        <input type="radio" name="sortbyfilter" id="sort_newest" value="newest" wire:model="sort"><span class="checkRadio"></span></label>
                                    </li>
                                    <li>
                                        <label for="sort_oldest" class="inRadio">Oldest
                                        <input type="radio" name="sortbyfilter" id="sort_oldest" value="oldest" wire:model="sort"><span class="checkRadio"></span></label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sntCntWrap">
        <section class="nopadd">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 voffset3">
                        <h6 class="lgHeading">
                           {{$optinal_slug}}
                            @if($bred_cats)
                            @foreach($bred_cats as $key=>$cats)
                               {{ $loop->first ? '' : ', ' }} {{$cats->name}}
                            @endforeach
                            @endif
                            @if($bindinglist)
                            @foreach($bindinglist as $key=>$binding)
                               {{ $loop->first ? '' : ', ' }} {{$binding}}
                            @endforeach
                            @endif
                            @if($authorFilter)
                            @foreach($authorFilter as $key=>$authorsearch)
                               {{ $loop->first ? '' : ', ' }} {{$authorsearch}}
                            @endforeach
                            @endif
                            @if($langFilter)
                            @foreach($langFilter as $key=>$lang_filter)
                               {{ $loop->first ? '' : ', ' }} {{$lang_filter}}
                            @endforeach
                            @endif
                        </h6>
                        <h6 class="voffset1"><small>{{@$books->count()}} results found</small></h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 voffset3">
                        <div class="flexGrid productGrid itemDisp">

                            @if (!empty($books))
                                @foreach($books as $key=>$book)
                                    <div class="col6">
                                        <article>
                                            <a href="{{URL::to('/book/'.$book->slug)}}" aria-label="norse">
                                                <div class="imgZoomWrap">
                                                    <img src="{{$book->image}}" class="img-fluid" alt="{{$book->name}}">
                                                </div>
                                            </a>
                                            <a href="{{URL::to('/book/'.$book->slug)}}" class="titleLink">{{$book->name}}</a>
                                            <div class="priceAttr">
                                                <div>
                                                    <span class="stickOut">
                                                        <i class="currency_item1">{{$book->symbol}}</i>{{$book->mrp}}
                                                    </span>
                                                    <span><i class="currency_item1">{{$book->symbol}}</i>{{$book->price}}</span>
                                                </div>
                                                <div>{{$book->discount}}% off</div>
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
                </div>
            </div>
        </section>
        <hr>
    </div>
</div>
