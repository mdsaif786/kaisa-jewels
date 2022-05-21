<section class="topFirst">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ol class="breadcrumb">
                  <li><a href="{{URL::to('/')}}">Home</a></li>
                  <li><a href="#">{{$book->category->name ?? $book->sub_category->name ?? ''}}</a></li>
                  <li><a href="#">{{$book->name}}</a></li>
                </ol>
            </div>
        </div>
        <div class="row between-sm">
            <div class="col-xs-12 col-sm-8">
                <ul class="slickSwipe imgGalSwipe">
                    <li><img src="{{$book->image}}" class="img-fluid" alt="{{$book->name}}"></li>
{{--                    <li><img src="{{asset('img/the-gift-of-love2.jpg')}}" class="img-fluid" alt=""></li>--}}
{{--                    <li><img src="{{asset('img/the-gift-of-love3.jpg')}}" class="img-fluid" alt=""></li>--}}
                </ul>
            </div>

            <div class="col-xs-12 col-sm-4">
                <div class="pdpDesc">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h1 class="pageHeading bold">{{$book->name}}</h1>
                                    <h2 class="pageSubHeading">Writer: {{$book->book_authors->name ?? ''}}</h2>
                                    <h3 class="greenTxt pageSubHeading">{{$book->stock_status->name ?? ''}}</h3>
                                    <hr/>
                                    <div class="ratingAttr">
                                    <span class="starRatings">
                                        <u class="orangeTxt bold">4.8</u>
                                        <i class="active"></i>
                                        <i class="active"></i>
                                        <i class="active"></i>
                                        <i class="active"></i>
                                        <i></i>
                                    </span>&nbsp;&nbsp;
                                    <a href="#details_reviews" class="bold underline scrollSpyLink details_reviews">348 Reviews</a>
                                </div>
                                </div>
                                <div class="col-xs-12">
                                    <hr/>
                                    <div class="priceAttr">
                                        <div>
                                            <span class="stickOut"><i class="currency_item1">
                                                {{$book->symbol}}</i>{{$book->mrp}}</span>
                                            <span class="hlgt"><i class="currency_item1">{{$book->symbol}}</i>{{$book->price}}</span>
                                        </div>
                                        <div>You Save: <i class="currency_item1">{{$book->symbol}}</i>
                                            {{$book->mrp-$book->price}} ({{$book->discount}} %)</div>
                                    </div>
                                    <p><small>Inclusive of all taxes</small></p>
                                    <hr/>
                                </div>
                                <div class="col-xs-12">
                                    <p>{!! $book->discription !!}
                                        <a href="#details_description" class="bold underline scrollSpyLink details_description">Read more</a></p>
                                    <hr/>
                                </div>
                                <livewire:child-component-for-cart :id="$book->id"/>
                                <div class="col-xs-12 voffset3">
                                    <h5 class="bold">Best Offers</h5>
                                    <ul class="bulletList">
                                        <li>Coupon Discount: <span class="bold">{{$book->coupon_discount}}</span> %off (check cart for final savings)</li>
                                        <li>Applicable on: Orders <span class="bold">{{$book->no_of_qty_for_discount}}</span> Book(s)</li>
                                        <li>Coupon code: <span class="bold text-uppercase">{{$book->coupon_code}}</span></li>
                                    </ul>
                                    <hr/>
                                </div>
                                <div class="col-xs-12 voffset3">
                                    <h5>Shipping</h5>
                                    <p>Estimated shipping charge: <i class="currency_item">₹</i><span class="bold">120</span></p>
                                    <p>Deliver to <span class="bold">Sanjeet</span> - <span class="bold">New Delhi 110059‌</span> by <span class="bold">03 Aug, 2020</span></p>
                                    <ul class="inListBtn">
                                        <li>
                                            <span class="toggleNavLink linkBtn active" data-nav="shippingInfo">Change Shipping</span>
                                        </li>
                                    </ul>
                                    <div class="toggleCnt" id="show_shippingInfo">
                                        <label for="shipping_codes">Enter Zip code</label>
                                        <div class="inlineShippingFrm active">
                                            <input type="text" id="shipping_codes" class="form-control numberOnly" name="shipping_codes">
                                            <button type="button" class="formBtn" id="calculate_shipping">Calculate</button>
                                        </div>
                                    </div>
                                    <hr/>
                                </div>
                                <div class="col-xs-12 voffset3">
                                    <h5>Share this products</h5>
                                    <ul class="productShare">
                                        <li><a href="#"><i class="facebook"></i><span>Facebook</span></a></li>
                                        <li><a href="#"><i class="twitter"></i><span>Twitter</span></a></li>
                                        <li><a href="#"><i class="linkedin"></i><span>Linkein</span></a></li>
                                        <li><a href="#"><i class="instagram"></i><span>instagram</span></a></li>
                                        <li><a href="#"><i class="whatsapp"></i><span>whatsapp</span></a></li>
                                    </ul>
                                    <hr/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h5>Combo offer</h5>
                <h6 class="text-uppercase">Frequently bought together</h6>
            </div>
            <div class="col-xs-12">
                <div class="scrollCntWrap">
                    <div class="comboWrap">
                        <article class="comboItem active">
                            <img src="{{asset('img/the-gift-of-love2.jpg')}}" class="img-fluid" alt="">
                            <p>The gift of love <i class="currency_item">₹</i>199</p>
                        </article>
                        <article class="comboItem active">
                            <img src="{{asset('img/sister-outsider.jpg')}}" class="img-fluid" alt="">
                            <p>sister outsider <i class="currency_item">₹</i>50</p>
                        </article>
                        <article class="comboItem active">
                            <img src="{{asset('img/stamped.jpg')}}" class="img-fluid" alt="">
                            <p>Stemped for the <i class="currency_item">₹</i>50</p>
                        </article>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="priceAttr">
                    <span class="hlgt"><i class="currency_item">₹</i>299</span>
                    <div>You Save: <i class="currency_item">₹</i>49 (25%)</div>
                </div>
                <small>Inclusive of all taxes</small>
            </div>
            <div class="col-xs-12 voffset2">
                <button type="button" class="formBtn" id="btn_combo_buy">Buy All 3 items</button>
            </div>
        </div>
    </div>
</section> --}}
<div class="stickyMain">
    <div class="stickyNavTop">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="scrollSpyTabNav inline">
                        <li><a class="scrollSpyLink details_additional_info active" href="#details_additional_info">Additional information</a></li>
                        <li><a class="scrollSpyLink details_description" href="#details_description">Description</a></li>
                        <li><a class="scrollSpyLink details_reviews" href="#details_reviews">Reviews</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="sntCntWrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <section class="scrollCntWrap" id="details_additional_info">
                        <div class="row">
                            <div class="col-xs-12">
                                <h4 class="bold">Additional information</h4>
                                <ul class="tblList">
                                    <li>
                                        <span>SKU </span>
                                        <span>{{$book->sku}}</span>
                                    </li>
                                    <li>
                                        <span>Language </span>
                                        <span>{{$book->language->name}}</span>
                                    </li>
                                    <li>
                                        <span>Book Category </span>
                                        <span>{{$book->category->name ?? $book->sub_category->name ?? ''}}</span>
                                    </li>
                                    <li>
                                        <span>Weight</span>
                                        <span>{{$book->weight}}</span>
                                    </li>
                                    <li>
                                        <span>Dimensions</span>
                                        <span>{{$book->dimensions}}</span>
                                    </li>
                                    <li>
                                        <span>Publisher</span>
                                        <span><a href="#" class="bold">{{$book->publisher->name ?? ''}}</a></span>
                                    </li>
                                    <li>
                                        <span>Format</span>

                                            @if(!empty($book->binding_types))
                                                <?php $bi="";?>
                                                @foreach($book->binding_types as $key=>$binding)
                                                    <?php $bi=$binding->name .','; ?>
                                                <span>{{$bi}}</span>
                                                @endforeach
                                            @endif
                                    </li>
                                    <li>
                                        <span>Pages</span>
                                        <span>{{$book->no_of_pages}}</span>
                                    </li>
                                    <li>
                                        <span>ISBN 10</span>
                                        <span>{{$book->isbn_10}}</span>
                                    </li>
                                    <li>
                                        <span>ISBN 13</span>
                                        <span>{{$book->isbn_30}}</span>
                                    </li>
                                    <li>
                                        <span>Publication city/country</span>
                                        <span>{{$book->publication_city_or_country}}</span>
                                    </li>
                                    <li>
                                        <span>Publication Date</span>
                                        <span>{{$book->publication_date}}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <section class="scrollCntWrap" id="details_description">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h4 class="bold">Description</h4>
                                        <div class="contentPara">
                                            <p>{!! $book->description !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="scrollCntWrap" id="details_reviews">
                        <div class="row">
                            <div class="col-xs-12">
                                <h5>What people say about us</h5>
                                <h6 class="text-uppercase">Reviews</h6>
                            </div>
                            <div class="col-xs-12 voffset2 reviewList">
                                @if(!empty($getBookReviews))
                                @foreach($getBookReviews as $key=>$review)
                                <article>
                                    <div class="infoWrap">
                                        <h6 class="bold"> {{ $review->user->name ?? 'Guest' }}</h6>
                                         <h6 class="grayTxt">
                                            <small></small>
                                        </h6>
                                        {{-- <h6 class="grayTxt"><small>Student</small></h6> --}}
                                    </div>
                                    <blockquote>
                                        {!!$review->message !!}
                                    </blockquote>
                                    <div class="infoBtmWrap">
                                        <span class="starRatings">
                                            <u class="orangeTxt bold"></u>
                                            @if($review->review_point<1)
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                            @else
                                            @for($i=0;$i<5;$i++)
                                            @if($i<$review->review_point)
                                            <i class="active"></i>
                                            @else
                                            <i></i>
                                            @endif
                                            @endfor
                                            @endif
                                        </span>
                                        <small class="timeDisp">{{$review->updated_at->diffForHumans()}}</small>
                                    </div>
                                </article>
                                @endforeach
                                @endif
                            </div>
                            <div class="col-xs-12 voffset2">
                                <ul class="groupButtonSet">
                                    <li><a href="{{URL::to('/register')}}">View all reviews</a></li>
                                    <li><a href="{{URL::to('/login')}}">Add your reviews</a></li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="lgrayBg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h5>You may also like</h5>
                <h6 class="text-uppercase">Related Products</h6>
            </div>
        </div>
        <div class="row voffset2">
            <div class="col-xs-12">
                <div class="slickSwipe productSwipe itemDisp">
                    @if (!empty($relatedBooks))
                        @foreach ($relatedBooks as $relatedBook)
                            <article>
                                <a href="{{URL::to('/book/'.$relatedBook->slug)}}" class="imgTxt">
                                    <div class="imgZoomWrap">
                                        <img src="{{$relatedBook->image}}" class="img-fluid" alt="">
                                        <span>{{$relatedBook->name}}</span>
                                    </div>
                                </a>
                                <a href="{{URL::to('/book/'.$relatedBook->slug)}}" class="titleLink">{{$relatedBook->name}}</a>
                                <div class="priceAttr">
                                    <div>
                                        <span class="stickOut"><i class="currency_item1">{{$relatedBook->symbol}}</i>{{$relatedBook->mrp}}</span>
                                        <span><i class="currency_item1">{{$relatedBook->symbol}}</i>{{$relatedBook->price}}</span>
                                    </div>
                                    <div>{{$relatedBook->discount}}% off</div>
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
            </div>
        </div>
    </div>
</section>
