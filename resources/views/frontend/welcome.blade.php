@extends('layouts.master')

@section('content')
<section class="heroHome">
    <div class="container">
        <div class="row middle-sm between-sm">
            <div class="col-xs-12 col-sm-5 col-md-6">
                <div class="row">
                    <div class="col-xs-12 col-md-10">
                        <div class="leftHero">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h5>Improve your latest skills for online</h5>
                                    <h2 class="big greenTxt typewrite"  data-period="2000" data-type='[ "Bank Exam", "SSC", "Banking", "Law", "Medical" ]'>
                                        <span class="wrap"></span>
                                    </h2>
                                    <h5>with world's best educators</h5>
                                </div>
                                <div class="col-xs-12 voffset4">
                                    <form name="heroSearchForm" class="heroSearchForm" id="heroSearchForm">
                                        <div class="row voffset3">
                                            <div class="col-xs-12">
                                                <label><small>Discover from thousands of free online courses.</small></label>
                                                <input type="search" class="form-control searchIcon" name="heroSearch" id="heroSearch" placeholder="What do you want to learn today?">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 voffset4">&nbsp;</div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-5">
                <ul class="slickSwipe heroHomeSwipe">
                    <li>
                        <img src="{{asset('img/heroswipe01.png')}}" class="img-fluid" alt="">
                    </li>
                    <li>
                        <img src="{{asset('img/heroswipe01.png')}}" class="img-fluid" alt="">
                    </li>
                    <li>
                        <img src="{{asset('img/heroswipe01.png')}}" class="img-fluid" alt="">
                    </li>
                    <li>
                        <img src="{{asset('img/heroswipe01.png')}}" class="img-fluid" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="heroCurve">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 160 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="#fff" />
            </g>
        </svg>
    </div>
</section>
<section class="getStartedHome">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="pageHeading">Achieve your dream goals</h1>
                <h6 class="pageSubHeading">Online learning form anywhere, anytime</h6>
            </div>
            <div class="col-xs-12 voffset2">
                <ul class="groupButtonSet green">
                    <li><a href="{{ route('register') }}">Join for FREE</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="whitebg shadowBtm featureHome tabSecCntWrap">
    <div class="container">        
        <div class="row">
            <div class="col-xs-12 text-center">
                <h3>Featured programs</h3>
                <h6>Prepare better with comprehensive classes</h6>
            </div>
            <div class="col-xs-12 voffset2 text-center">
                <div class="scrollTabs">
                    <ul class="tabsButtonSet swipInit">
                        <li class="active" dataTabNav="feature_video_class">Video classes</li>
                        <li dataTabNav="feature_live_class">Live Classes</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 voffset2">
                <div class="tabbedCntWrap active" id="showTab_feature_video_class">
                    <div class="slickSwipe programSwipe feature-video-class">
                        <article class="courseListItem">
                            <a href="#" target="_blank">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/courseThumb01.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <div class="courseBtmWrap">
                                <ul class="courseLang">
                                    <li>English</li>
                                    <li>Hindi</li>
                                </ul>
                                <h4>Become a Product Manager</h4>
                                <h6><small>Personal Development</small></h6>
                                <h6><small>By Atul Verma</small></h6>
                                <ul class="courseAttr">
                                    <li>
                                        <h6><small>Start date</small></h6>
                                        <h6>Jul 15, 2020</h6>
                                    </li>
                                    <li>
                                        <h6><small>Duration</small></h6>
                                        <h6>3 months</h6>
                                    </li>
                                </ul>
                                <h6 class="ratingWrap">
                                    <span class="orangeTxt bold">4.8</span>
                                    <ul class="starRatings">
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                    </ul>
                                    <small>(2,731 people)</small>
                                </h6>
                                <ul class="bottomLinks">
                                    <h5 class="priceInfo">
                                        <span class="newPrice"><i>₹</i>700</span>
                                        <span class="realPrice"><i>₹</i>700</span>
                                    </h5>
                                    <a href="#" class="arrowBtn">View course</a>
                                </ul>
                            </div>
                        </article>
                        <article class="courseListItem">
                            <a href="#" target="_blank">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/courseThumb01.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <div class="courseBtmWrap">
                                <ul class="courseLang">
                                    <li>English</li>
                                    <li>Hindi</li>
                                </ul>
                                <h4>Become a Product Manager</h4>
                                <h6><small>Personal Development</small></h6>
                                <h6><small>By Atul Verma</small></h6>
                                <ul class="courseAttr">
                                    <li>
                                        <h6><small>Start date</small></h6>
                                        <h6>Jul 15, 2020</h6>
                                    </li>
                                    <li>
                                        <h6><small>Duration</small></h6>
                                        <h6>3 months</h6>
                                    </li>
                                </ul>
                                <h6 class="ratingWrap">
                                    <span class="orangeTxt bold">4.8</span>
                                    <ul class="starRatings">
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                    </ul>
                                    <small>(2,731 people)</small>
                                </h6>
                                <ul class="bottomLinks">
                                    <h5 class="priceInfo">
                                        <span class="newPrice"><i>₹</i>700</span>
                                        <span class="realPrice"><i>₹</i>700</span>
                                    </h5>
                                    <a href="#" class="arrowBtn">View course</a>
                                </ul>
                            </div>
                        </article>
                        <article class="courseListItem">
                            <a href="#" target="_blank">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/courseThumb01.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <div class="courseBtmWrap">
                                <ul class="courseLang">
                                    <li>English</li>
                                    <li>Hindi</li>
                                </ul>
                                <h4>Become a Product Manager</h4>
                                <h6><small>Personal Development</small></h6>
                                <h6><small>By Atul Verma</small></h6>
                                <ul class="courseAttr">
                                    <li>
                                        <h6><small>Start date</small></h6>
                                        <h6>Jul 15, 2020</h6>
                                    </li>
                                    <li>
                                        <h6><small>Duration</small></h6>
                                        <h6>3 months</h6>
                                    </li>
                                </ul>
                                <h6 class="ratingWrap">
                                    <span class="orangeTxt bold">4.8</span>
                                    <ul class="starRatings">
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                    </ul>
                                    <small>(2,731 people)</small>
                                </h6>
                                <ul class="bottomLinks">
                                    <h5 class="priceInfo">
                                        <span class="newPrice"><i>₹</i>700</span>
                                        <span class="realPrice"><i>₹</i>700</span>
                                    </h5>
                                    <a href="#" class="arrowBtn">View course</a>
                                </ul>
                            </div>
                        </article>
                        <article class="courseListItem">
                            <a href="#" target="_blank">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/courseThumb01.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <div class="courseBtmWrap">
                                <ul class="courseLang">
                                    <li>English</li>
                                    <li>Hindi</li>
                                </ul>
                                <h4>Become a Product Manager</h4>
                                <h6><small>Personal Development</small></h6>
                                <h6><small>By Atul Verma</small></h6>
                                <ul class="courseAttr">
                                    <li>
                                        <h6><small>Start date</small></h6>
                                        <h6>Jul 15, 2020</h6>
                                    </li>
                                    <li>
                                        <h6><small>Duration</small></h6>
                                        <h6>3 months</h6>
                                    </li>
                                </ul>
                                <h6 class="ratingWrap">
                                    <span class="orangeTxt bold">4.8</span>
                                    <ul class="starRatings">
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                    </ul>
                                    <small>(2,731 people)</small>
                                </h6>
                                <ul class="bottomLinks">
                                    <h5 class="priceInfo">
                                        <span class="newPrice"><i>₹</i>700</span>
                                        <span class="realPrice"><i>₹</i>700</span>
                                    </h5>
                                    <a href="#" class="arrowBtn">View course</a>
                                </ul>
                            </div>
                        </article>
                        <article class="courseListItem">
                            <a href="#" target="_blank">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/courseThumb01.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <div class="courseBtmWrap">
                                <ul class="courseLang">
                                    <li>English</li>
                                    <li>Hindi</li>
                                </ul>
                                <h4>Become a Product Manager</h4>
                                <h6><small>Personal Development</small></h6>
                                <h6><small>By Atul Verma</small></h6>
                                <ul class="courseAttr">
                                    <li>
                                        <h6><small>Start date</small></h6>
                                        <h6>Jul 15, 2020</h6>
                                    </li>
                                    <li>
                                        <h6><small>Duration</small></h6>
                                        <h6>3 months</h6>
                                    </li>
                                </ul>
                                <h6 class="ratingWrap">
                                    <span class="orangeTxt bold">4.8</span>
                                    <ul class="starRatings">
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                    </ul>
                                    <small>(2,731 people)</small>
                                </h6>
                                <ul class="bottomLinks">
                                    <h5 class="priceInfo">
                                        <span class="newPrice"><i>₹</i>700</span>
                                        <span class="realPrice"><i>₹</i>700</span>
                                    </h5>
                                    <a href="#" class="arrowBtn">View course</a>
                                </ul>
                            </div>
                        </article>
                        <article class="courseListItem">
                            <a href="#" target="_blank">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/courseThumb01.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <div class="courseBtmWrap">
                                <ul class="courseLang">
                                    <li>English</li>
                                    <li>Hindi</li>
                                </ul>
                                <h4>Become a Product Manager</h4>
                                <h6><small>Personal Development</small></h6>
                                <h6><small>By Atul Verma</small></h6>
                                <ul class="courseAttr">
                                    <li>
                                        <h6><small>Start date</small></h6>
                                        <h6>Jul 15, 2020</h6>
                                    </li>
                                    <li>
                                        <h6><small>Duration</small></h6>
                                        <h6>3 months</h6>
                                    </li>
                                </ul>
                                <h6 class="ratingWrap">
                                    <span class="orangeTxt bold">4.8</span>
                                    <ul class="starRatings">
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                    </ul>
                                    <small>(2,731 people)</small>
                                </h6>
                                <ul class="bottomLinks">
                                    <h5 class="priceInfo">
                                        <span class="newPrice"><i>₹</i>700</span>
                                        <span class="realPrice"><i>₹</i>700</span>
                                    </h5>
                                    <a href="#" class="arrowBtn">View course</a>
                                </ul>
                            </div>
                        </article>
                        <article class="courseListItem">
                            <a href="#" target="_blank">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/courseThumb01.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <div class="courseBtmWrap">
                                <ul class="courseLang">
                                    <li>English</li>
                                    <li>Hindi</li>
                                </ul>
                                <h4>Become a Product Manager</h4>
                                <h6><small>Personal Development</small></h6>
                                <h6><small>By Atul Verma</small></h6>
                                <ul class="courseAttr">
                                    <li>
                                        <h6><small>Start date</small></h6>
                                        <h6>Jul 15, 2020</h6>
                                    </li>
                                    <li>
                                        <h6><small>Duration</small></h6>
                                        <h6>3 months</h6>
                                    </li>
                                </ul>
                                <h6 class="ratingWrap">
                                    <span class="orangeTxt bold">4.8</span>
                                    <ul class="starRatings">
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                    </ul>
                                    <small>(2,731 people)</small>
                                </h6>
                                <ul class="bottomLinks">
                                    <h5 class="priceInfo">
                                        <span class="newPrice"><i>₹</i>700</span>
                                        <span class="realPrice"><i>₹</i>700</span>
                                    </h5>
                                    <a href="#" class="arrowBtn">View course</a>
                                </ul>
                            </div>
                        </article>                        
                    </div>
                </div>
                <div class="tabbedCntWrap" id="showTab_feature_live_class">
                    <div class="slickSwipe programSwipe feature-video-class">
                        <article class="courseListItem">
                            <a href="#" target="_blank">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/courseThumb02.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <div class="courseBtmWrap">
                                <ul class="courseLang">
                                    <li>English</li>
                                    <li>Hindi</li>
                                </ul>
                                <h4>Become a Product Manager</h4>
                                <h6><small>Personal Development</small></h6>
                                <h6><small>By Atul Verma</small></h6>
                                <ul class="courseAttr">
                                    <li>
                                        <h6><small>Start date</small></h6>
                                        <h6>Jul 15, 2020</h6>
                                    </li>
                                    <li>
                                        <h6><small>Duration</small></h6>
                                        <h6>3 months</h6>
                                    </li>
                                </ul>
                                <h6 class="ratingWrap">
                                    <span class="orangeTxt bold">4.8</span>
                                    <ul class="starRatings">
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                    </ul>
                                    <small>(2,731 people)</small>
                                </h6>
                                <ul class="bottomLinks">
                                    <h5 class="priceInfo">
                                        <span class="newPrice"><i>₹</i>700</span>
                                        <span class="realPrice"><i>₹</i>700</span>
                                    </h5>
                                    <a href="#" class="arrowBtn">View course</a>
                                </ul>
                            </div>
                        </article>
                        <article class="courseListItem">
                            <a href="#" target="_blank">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/courseThumb02.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <div class="courseBtmWrap">
                                <ul class="courseLang">
                                    <li>English</li>
                                    <li>Hindi</li>
                                </ul>
                                <h4>Become a Product Manager</h4>
                                <h6><small>Personal Development</small></h6>
                                <h6><small>By Atul Verma</small></h6>
                                <ul class="courseAttr">
                                    <li>
                                        <h6><small>Start date</small></h6>
                                        <h6>Jul 15, 2020</h6>
                                    </li>
                                    <li>
                                        <h6><small>Duration</small></h6>
                                        <h6>3 months</h6>
                                    </li>
                                </ul>
                                <h6 class="ratingWrap">
                                    <span class="orangeTxt bold">4.8</span>
                                    <ul class="starRatings">
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                    </ul>
                                    <small>(2,731 people)</small>
                                </h6>
                                <ul class="bottomLinks">
                                    <h5 class="priceInfo">
                                        <span class="newPrice"><i>₹</i>700</span>
                                        <span class="realPrice"><i>₹</i>700</span>
                                    </h5>
                                    <a href="#" class="arrowBtn">View course</a>
                                </ul>
                            </div>
                        </article>
                        <article class="courseListItem">
                            <a href="#" target="_blank">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/courseThumb02.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <div class="courseBtmWrap">
                                <ul class="courseLang">
                                    <li>English</li>
                                    <li>Hindi</li>
                                </ul>
                                <h4>Become a Product Manager</h4>
                                <h6><small>Personal Development</small></h6>
                                <h6><small>By Atul Verma</small></h6>
                                <ul class="courseAttr">
                                    <li>
                                        <h6><small>Start date</small></h6>
                                        <h6>Jul 15, 2020</h6>
                                    </li>
                                    <li>
                                        <h6><small>Duration</small></h6>
                                        <h6>3 months</h6>
                                    </li>
                                </ul>
                                <h6 class="ratingWrap">
                                    <span class="orangeTxt bold">4.8</span>
                                    <ul class="starRatings">
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                    </ul>
                                    <small>(2,731 people)</small>
                                </h6>
                                <ul class="bottomLinks">
                                    <h5 class="priceInfo">
                                        <span class="newPrice"><i>₹</i>700</span>
                                        <span class="realPrice"><i>₹</i>700</span>
                                    </h5>
                                    <a href="#" class="arrowBtn">View course</a>
                                </ul>
                            </div>
                        </article>
                        <article class="courseListItem">
                            <a href="#" target="_blank">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/courseThumb02.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <div class="courseBtmWrap">
                                <ul class="courseLang">
                                    <li>English</li>
                                    <li>Hindi</li>
                                </ul>
                                <h4>Become a Product Manager</h4>
                                <h6><small>Personal Development</small></h6>
                                <h6><small>By Atul Verma</small></h6>
                                <ul class="courseAttr">
                                    <li>
                                        <h6><small>Start date</small></h6>
                                        <h6>Jul 15, 2020</h6>
                                    </li>
                                    <li>
                                        <h6><small>Duration</small></h6>
                                        <h6>3 months</h6>
                                    </li>
                                </ul>
                                <h6 class="ratingWrap">
                                    <span class="orangeTxt bold">4.8</span>
                                    <ul class="starRatings">
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                    </ul>
                                    <small>(2,731 people)</small>
                                </h6>
                                <ul class="bottomLinks">
                                    <h5 class="priceInfo">
                                        <span class="newPrice"><i>₹</i>700</span>
                                        <span class="realPrice"><i>₹</i>700</span>
                                    </h5>
                                    <a href="#" class="arrowBtn">View course</a>
                                </ul>
                            </div>
                        </article>
                        <article class="courseListItem">
                            <a href="#" target="_blank">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/courseThumb02.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <div class="courseBtmWrap">
                                <ul class="courseLang">
                                    <li>English</li>
                                    <li>Hindi</li>
                                </ul>
                                <h4>Become a Product Manager</h4>
                                <h6><small>Personal Development</small></h6>
                                <h6><small>By Atul Verma</small></h6>
                                <ul class="courseAttr">
                                    <li>
                                        <h6><small>Start date</small></h6>
                                        <h6>Jul 15, 2020</h6>
                                    </li>
                                    <li>
                                        <h6><small>Duration</small></h6>
                                        <h6>3 months</h6>
                                    </li>
                                </ul>
                                <h6 class="ratingWrap">
                                    <span class="orangeTxt bold">4.8</span>
                                    <ul class="starRatings">
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                    </ul>
                                    <small>(2,731 people)</small>
                                </h6>
                                <ul class="bottomLinks">
                                    <h5 class="priceInfo">
                                        <span class="newPrice"><i>₹</i>700</span>
                                        <span class="realPrice"><i>₹</i>700</span>
                                    </h5>
                                    <a href="#" class="arrowBtn">View course</a>
                                </ul>
                            </div>
                        </article>                      
                    </div>
                </div>
            </div>
            <div class="col-xs-12 voffset3 text-center">
                <ul class="listButton">
                    <a href="#" class="linkBtn green">Discover all featured programs</a>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="tabSecCntWrap">
    <div class="container">        
        <div class="row">
            <div class="col-xs-12 text-center">
                <h3>Explore top exams</h3>
                <h6>Discover thousands of online courses</h6>
            </div>
            <div class="col-xs-12 voffset2 text-center">
                <div class="scrollTabs">
                    <ul class="tabsButtonSet">
                        <li class="active" dataTabNav="topexam_video_class">Video classes</li>
                        <li dataTabNav="topexam_live_class">Live Classes</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 voffset2">
                <div class="tabbedCntWrap active" id="showTab_topexam_video_class">
                    <ul class="keyCategoryList">
                        <li>
                            <!-- <span class="categoryIcon gov_exam" dataIcon="gov_exam"></span> -->
                            <h5>school exams</h5>
                            <h6><small>2751 courses</small>
                            <div class="subCatList">
                                <a href="#">SSC</a>
                                <a href="#">Railway</a>
                                <a href="#">State PSC</a>
                                <a href="#">Banking</a>
                            </div>
                            <a href="#" class="smallLinkBtn">View all category</a>
                        </li>
                        <li>
                            <h5>school exams</h5>
                            <h6><small>2471 courses</small>
                            <div class="subCatList">
                                <a href="#">SSC</a>
                                <a href="#">Railway</a>
                                <a href="#">State PSC</a>
                                <a href="#">Banking</a>
                            </div>
                            <a href="#" class="smallLinkBtn">View all category</a>
                        </li>
                        <li>
                            <h5>school exams</h5>
                            <h6><small>1278 courses</small>
                            <div class="subCatList">
                                <a href="#">SSC</a>
                                <a href="#">Railway</a>
                                <a href="#">State PSC</a>
                                <a href="#">Banking</a>
                            </div>
                            <a href="#" class="smallLinkBtn">View all category</a>
                        </li>
                        <li>
                            <h5>Law</h5>
                            <h6><small>182 courses</small>
                            <div class="subCatList">
                                <a href="#">SSC</a>
                                <a href="#">Railway</a>
                                <a href="#">State PSC</a>
                                <a href="#">Banking</a>
                            </div>
                            <a href="#" class="smallLinkBtn">View all category</a>
                        </li>
                        <li>
                            <h5>Medical</h5>
                            <h6><small>835 courses</small>
                            <div class="subCatList">
                                <a href="#">SSC</a>
                                <a href="#">Railway</a>
                                <a href="#">State PSC</a>
                                <a href="#">Banking</a>
                            </div>
                            <a href="#" class="smallLinkBtn">View all category</a>
                        </li>
                        <li>
                            <h5>Governement exams</h5>
                            <h6><small>349 courses</small>
                            <div class="subCatList">
                                <a href="#">SSC</a>
                                <a href="#">Railway</a>
                                <a href="#">State PSC</a>
                                <a href="#">Banking</a>
                            </div>
                            <a href="#" class="smallLinkBtn">View all category</a>
                        </li>
                    </ul>
                </div>
                <div class="tabbedCntWrap" id="showTab_topexam_live_class">
                    <ul class="keyCategoryList">
                        <li>
                            <!-- <span class="categoryIcon gov_exam" dataIcon="gov_exam"></span> -->
                            <h5>Governement exams</h5>
                            <h6><small>51 courses</small>
                            <div class="subCatList">
                                <a href="#">SSC</a>
                                <a href="#">Railway</a>
                                <a href="#">State PSC</a>
                                <a href="#">Banking</a>
                            </div>
                            <a href="#" class="smallLinkBtn">View all category</a>
                        </li>
                        <li>
                            <h5>Governement exams</h5>
                            <h6><small>75 courses</small>
                            <div class="subCatList">
                                <a href="#">SSC</a>
                                <a href="#">Railway</a>
                                <a href="#">State PSC</a>
                                <a href="#">Banking</a>
                            </div>
                            <a href="#" class="smallLinkBtn">View all category</a>
                        </li>
                        <li>
                            <h5>Governement exams</h5>
                            <h6><small>40 courses</small>
                            <div class="subCatList">
                                <a href="#">SSC</a>
                                <a href="#">Railway</a>
                                <a href="#">State PSC</a>
                                <a href="#">Banking</a>
                            </div>
                            <a href="#" class="smallLinkBtn">View all category</a>
                        </li>
                        <li>
                            <h5>Governement exams</h5>
                            <h6><small>154 courses</small>
                            <div class="subCatList">
                                <a href="#">SSC</a>
                                <a href="#">Railway</a>
                                <a href="#">State PSC</a>
                                <a href="#">Banking</a>
                            </div>
                            <a href="#" class="smallLinkBtn">View all category</a>
                        </li>
                        <li>
                            <h5>Governement exams</h5>
                            <h6><small>321 courses</small>
                            <div class="subCatList">
                                <a href="#">SSC</a>
                                <a href="#">Railway</a>
                                <a href="#">State PSC</a>
                                <a href="#">Banking</a>
                            </div>
                            <a href="#" class="smallLinkBtn">View all category</a>
                        </li>
                        <li>
                            <h5>Governement exams</h5>
                            <h6><small>62 courses</small>
                            <div class="subCatList">
                                <a href="#">SSC</a>
                                <a href="#">Railway</a>
                                <a href="#">State PSC</a>
                                <a href="#">Banking</a>
                            </div>
                            <a href="#" class="smallLinkBtn">View all category</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 voffset3 text-center">
                <ul class="listButton">
                    <a href="#" class="linkBtn base">Explore all exam categories</a>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="whitebg tabSecCntWrap">
    <div class="container">        
        <div class="row">
            <div class="col-xs-12 text-center">
                <h3>Popular video programs</h3>
                <h6>Choose from thousands of courses </h6>
            </div>
            <div class="col-xs-12 voffset2 text-center">
                <div class="scrollTabs">
                    <ul class="tabsButtonSet swipInit">
                        <li class="active" dataTabNav="popular_video_program01">Government exams</li>
                        <li dataTabNav="popular_video_program02">Schools exams</li>
                        <li dataTabNav="popular_video_program03">Professional</li>
                        <li dataTabNav="popular_video_program04">Civil services</li>
                        <li dataTabNav="popular_video_program05">Medical</li>
                        <li dataTabNav="popular_video_program06">Engineering</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 voffset2">
                <div class="tabbedCntWrap active" id="showTab_popular_video_program01">
                    <div class="slickSwipe programSwipe popular-gov-exam">
                        <article class="courseListItem">
                            <a href="#" target="_blank">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/courseThumb01.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <div class="courseBtmWrap">
                                <ul class="courseLang">
                                    <li>English</li>
                                    <li>Hindi</li>
                                </ul>
                                <h4>Become a Product Manager</h4>
                                <h6><small>Personal Development</small></h6>
                                <h6><small>By Atul Verma</small></h6>
                                <ul class="courseAttr">
                                    <li>
                                        <h6><small>Start date</small></h6>
                                        <h6>Jul 15, 2020</h6>
                                    </li>
                                    <li>
                                        <h6><small>Duration</small></h6>
                                        <h6>3 months</h6>
                                    </li>
                                </ul>
                                <h6 class="ratingWrap">
                                    <span class="orangeTxt bold">4.8</span>
                                    <ul class="starRatings">
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                    </ul>
                                    <small>(2,731 people)</small>
                                </h6>
                                <ul class="bottomLinks">
                                    <h5 class="priceInfo">
                                        <span class="newPrice"><i>₹</i>700</span>
                                        <span class="realPrice"><i>₹</i>700</span>
                                    </h5>
                                    <a href="#" class="arrowBtn">View course</a>
                                </ul>
                            </div>
                        </article>
                        <article class="courseListItem">
                            <a href="#" target="_blank">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/courseThumb01.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <div class="courseBtmWrap">
                                <ul class="courseLang">
                                    <li>English</li>
                                    <li>Hindi</li>
                                </ul>
                                <h4>Become a Product Manager</h4>
                                <h6><small>Personal Development</small></h6>
                                <h6><small>By Atul Verma</small></h6>
                                <ul class="courseAttr">
                                    <li>
                                        <h6><small>Start date</small></h6>
                                        <h6>Jul 15, 2020</h6>
                                    </li>
                                    <li>
                                        <h6><small>Duration</small></h6>
                                        <h6>3 months</h6>
                                    </li>
                                </ul>
                                <h6 class="ratingWrap">
                                    <span class="orangeTxt bold">4.8</span>
                                    <ul class="starRatings">
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                    </ul>
                                    <small>(2,731 people)</small>
                                </h6>
                                <ul class="bottomLinks">
                                    <h5 class="priceInfo">
                                        <span class="newPrice"><i>₹</i>700</span>
                                        <span class="realPrice"><i>₹</i>700</span>
                                    </h5>
                                    <a href="#" class="arrowBtn">View course</a>
                                </ul>
                            </div>
                        </article>                       
                    </div>
                </div>
                <div class="tabbedCntWrap" id="showTab_popular_video_program02">
                    <div class="slickSwipe programSwipe popular-gov-exam">
                        <article class="courseListItem">
                            <a href="#" target="_blank">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/courseThumb01.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <div class="courseBtmWrap">
                                <ul class="courseLang">
                                    <li>English</li>
                                    <li>Hindi</li>
                                </ul>
                                <h4>Become a Product Manager</h4>
                                <h6><small>Personal Development</small></h6>
                                <h6><small>By Atul Verma</small></h6>
                                <ul class="courseAttr">
                                    <li>
                                        <h6><small>Start date</small></h6>
                                        <h6>Jul 15, 2020</h6>
                                    </li>
                                    <li>
                                        <h6><small>Duration</small></h6>
                                        <h6>3 months</h6>
                                    </li>
                                </ul>
                                <h6 class="ratingWrap">
                                    <span class="orangeTxt bold">4.8</span>
                                    <ul class="starRatings">
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                    </ul>
                                    <small>(2,731 people)</small>
                                </h6>
                                <ul class="bottomLinks">
                                    <h5 class="priceInfo">
                                        <span class="newPrice"><i>₹</i>700</span>
                                        <span class="realPrice"><i>₹</i>700</span>
                                    </h5>
                                    <a href="#" class="arrowBtn">View course</a>
                                </ul>
                            </div>
                        </article>
                        <article class="courseListItem">
                            <a href="#" target="_blank">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/courseThumb01.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <div class="courseBtmWrap">
                                <ul class="courseLang">
                                    <li>English</li>
                                    <li>Hindi</li>
                                </ul>
                                <h4>Become a Product Manager</h4>
                                <h6><small>Personal Development</small></h6>
                                <h6><small>By Atul Verma</small></h6>
                                <ul class="courseAttr">
                                    <li>
                                        <h6><small>Start date</small></h6>
                                        <h6>Jul 15, 2020</h6>
                                    </li>
                                    <li>
                                        <h6><small>Duration</small></h6>
                                        <h6>3 months</h6>
                                    </li>
                                </ul>
                                <h6 class="ratingWrap">
                                    <span class="orangeTxt bold">4.8</span>
                                    <ul class="starRatings">
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                    </ul>
                                    <small>(2,731 people)</small>
                                </h6>
                                <ul class="bottomLinks">
                                    <h5 class="priceInfo">
                                        <span class="newPrice"><i>₹</i>700</span>
                                        <span class="realPrice"><i>₹</i>700</span>
                                    </h5>
                                    <a href="#" class="arrowBtn">View course</a>
                                </ul>
                            </div>
                        </article>                       
                    </div>
                </div>
                <div class="tabbedCntWrap" id="showTab_popular_video_program03">
                    <div class="slickSwipe programSwipe popular-gov-exam">
                        <article class="courseListItem">
                            <a href="#" target="_blank">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/courseThumb01.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <div class="courseBtmWrap">
                                <ul class="courseLang">
                                    <li>English</li>
                                    <li>Hindi</li>
                                </ul>
                                <h4>Become a Product Manager</h4>
                                <h6><small>Personal Development</small></h6>
                                <h6><small>By Atul Verma</small></h6>
                                <ul class="courseAttr">
                                    <li>
                                        <h6><small>Start date</small></h6>
                                        <h6>Jul 15, 2020</h6>
                                    </li>
                                    <li>
                                        <h6><small>Duration</small></h6>
                                        <h6>3 months</h6>
                                    </li>
                                </ul>
                                <h6 class="ratingWrap">
                                    <span class="orangeTxt bold">4.8</span>
                                    <ul class="starRatings">
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                    </ul>
                                    <small>(2,731 people)</small>
                                </h6>
                                <ul class="bottomLinks">
                                    <h5 class="priceInfo">
                                        <span class="newPrice"><i>₹</i>700</span>
                                        <span class="realPrice"><i>₹</i>700</span>
                                    </h5>
                                    <a href="#" class="arrowBtn">View course</a>
                                </ul>
                            </div>
                        </article>
                        <article class="courseListItem">
                            <a href="#" target="_blank">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/courseThumb01.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <div class="courseBtmWrap">
                                <ul class="courseLang">
                                    <li>English</li>
                                    <li>Hindi</li>
                                </ul>
                                <h4>Become a Product Manager</h4>
                                <h6><small>Personal Development</small></h6>
                                <h6><small>By Atul Verma</small></h6>
                                <ul class="courseAttr">
                                    <li>
                                        <h6><small>Start date</small></h6>
                                        <h6>Jul 15, 2020</h6>
                                    </li>
                                    <li>
                                        <h6><small>Duration</small></h6>
                                        <h6>3 months</h6>
                                    </li>
                                </ul>
                                <h6 class="ratingWrap">
                                    <span class="orangeTxt bold">4.8</span>
                                    <ul class="starRatings">
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                    </ul>
                                    <small>(2,731 people)</small>
                                </h6>
                                <ul class="bottomLinks">
                                    <h5 class="priceInfo">
                                        <span class="newPrice"><i>₹</i>700</span>
                                        <span class="realPrice"><i>₹</i>700</span>
                                    </h5>
                                    <a href="#" class="arrowBtn">View course</a>
                                </ul>
                            </div>
                        </article>                       
                    </div>
                </div>
                <div class="tabbedCntWrap" id="showTab_popular_video_program04">
                    <div class="slickSwipe programSwipe popular-gov-exam">
                        <article class="courseListItem">
                            <a href="#" target="_blank">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/courseThumb01.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <div class="courseBtmWrap">
                                <ul class="courseLang">
                                    <li>English</li>
                                    <li>Hindi</li>
                                </ul>
                                <h4>Become a Product Manager</h4>
                                <h6><small>Personal Development</small></h6>
                                <h6><small>By Atul Verma</small></h6>
                                <ul class="courseAttr">
                                    <li>
                                        <h6><small>Start date</small></h6>
                                        <h6>Jul 15, 2020</h6>
                                    </li>
                                    <li>
                                        <h6><small>Duration</small></h6>
                                        <h6>3 months</h6>
                                    </li>
                                </ul>
                                <h6 class="ratingWrap">
                                    <span class="orangeTxt bold">4.8</span>
                                    <ul class="starRatings">
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                    </ul>
                                    <small>(2,731 people)</small>
                                </h6>
                                <ul class="bottomLinks">
                                    <h5 class="priceInfo">
                                        <span class="newPrice"><i>₹</i>700</span>
                                        <span class="realPrice"><i>₹</i>700</span>
                                    </h5>
                                    <a href="#" class="arrowBtn">View course</a>
                                </ul>
                            </div>
                        </article>
                        <article class="courseListItem">
                            <a href="#" target="_blank">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/courseThumb01.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <div class="courseBtmWrap">
                                <ul class="courseLang">
                                    <li>English</li>
                                    <li>Hindi</li>
                                </ul>
                                <h4>Become a Product Manager</h4>
                                <h6><small>Personal Development</small></h6>
                                <h6><small>By Atul Verma</small></h6>
                                <ul class="courseAttr">
                                    <li>
                                        <h6><small>Start date</small></h6>
                                        <h6>Jul 15, 2020</h6>
                                    </li>
                                    <li>
                                        <h6><small>Duration</small></h6>
                                        <h6>3 months</h6>
                                    </li>
                                </ul>
                                <h6 class="ratingWrap">
                                    <span class="orangeTxt bold">4.8</span>
                                    <ul class="starRatings">
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                    </ul>
                                    <small>(2,731 people)</small>
                                </h6>
                                <ul class="bottomLinks">
                                    <h5 class="priceInfo">
                                        <span class="newPrice"><i>₹</i>700</span>
                                        <span class="realPrice"><i>₹</i>700</span>
                                    </h5>
                                    <a href="#" class="arrowBtn">View course</a>
                                </ul>
                            </div>
                        </article>                       
                    </div>
                </div>
                <div class="tabbedCntWrap" id="showTab_popular_video_program05">
                    <div class="slickSwipe programSwipe popular-gov-exam">
                        <article class="courseListItem">
                            <a href="#" target="_blank">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/courseThumb01.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <div class="courseBtmWrap">
                                <ul class="courseLang">
                                    <li>English</li>
                                    <li>Hindi</li>
                                </ul>
                                <h4>Become a Product Manager</h4>
                                <h6><small>Personal Development</small></h6>
                                <h6><small>By Atul Verma</small></h6>
                                <ul class="courseAttr">
                                    <li>
                                        <h6><small>Start date</small></h6>
                                        <h6>Jul 15, 2020</h6>
                                    </li>
                                    <li>
                                        <h6><small>Duration</small></h6>
                                        <h6>3 months</h6>
                                    </li>
                                </ul>
                                <h6 class="ratingWrap">
                                    <span class="orangeTxt bold">4.8</span>
                                    <ul class="starRatings">
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                    </ul>
                                    <small>(2,731 people)</small>
                                </h6>
                                <ul class="bottomLinks">
                                    <h5 class="priceInfo">
                                        <span class="newPrice"><i>₹</i>700</span>
                                        <span class="realPrice"><i>₹</i>700</span>
                                    </h5>
                                    <a href="#" class="arrowBtn">View course</a>
                                </ul>
                            </div>
                        </article>                       
                    </div>
                </div>
                <div class="tabbedCntWrap" id="showTab_popular_video_program06">
                    <div class="slickSwipe programSwipe popular-gov-exam">
                        <article class="courseListItem">
                            <a href="#" target="_blank">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/courseThumb01.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <div class="courseBtmWrap">
                                <ul class="courseLang">
                                    <li>English</li>
                                    <li>Hindi</li>
                                </ul>
                                <h4>Become a Product Manager</h4>
                                <h6><small>Personal Development</small></h6>
                                <h6><small>By Atul Verma</small></h6>
                                <ul class="courseAttr">
                                    <li>
                                        <h6><small>Start date</small></h6>
                                        <h6>Jul 15, 2020</h6>
                                    </li>
                                    <li>
                                        <h6><small>Duration</small></h6>
                                        <h6>3 months</h6>
                                    </li>
                                </ul>
                                <h6 class="ratingWrap">
                                    <span class="orangeTxt bold">4.8</span>
                                    <ul class="starRatings">
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                    </ul>
                                    <small>(2,731 people)</small>
                                </h6>
                                <ul class="bottomLinks">
                                    <h5 class="priceInfo">
                                        <span class="newPrice"><i>₹</i>700</span>
                                        <span class="realPrice"><i>₹</i>700</span>
                                    </h5>
                                    <a href="#" class="arrowBtn">View course</a>
                                </ul>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 voffset3 text-center">
                <ul class="listButton">
                    <a href="#" class="linkBtn base">Explore all courses</a>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="silverBg tabSecCntWrap">
    <div class="container">        
        <div class="row">
            <div class="col-xs-12 text-center">
                <h3>Live interactive classes</h3>
                <h6>Feels like you are in the classroom</h6>
            </div>
            <div class="col-xs-12 voffset2 text-center">
                <div class="scrollTabs">
                    <ul class="tabsButtonSet swipInit">
                        <li class="active" dataTabNav="live_class_cat01">Government exams</li>
                        <li dataTabNav="live_class_cat02">Schools exams</li>
                        <li dataTabNav="live_class_cat03">Professional</li>
                        <li dataTabNav="live_class_cat04">Civil services</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 voffset2">
                <div class="tabbedCntWrap active" id="showTab_live_class_cat01">
                    <div class="slickSwipe programSwipe popular-gov-exam">
                        <article class="courseListItem">
                            <a href="#" target="_blank">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/courseThumb01.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <div class="courseBtmWrap">
                                <ul class="courseLang">
                                    <li>English</li>
                                    <li>Hindi</li>
                                </ul>
                                <h4>Become a Product Manager</h4>
                                <h6><small>Personal Development</small></h6>
                                <h6><small>By Atul Verma</small></h6>
                                <ul class="courseAttr">
                                    <li>
                                        <h6><small>Start date</small></h6>
                                        <h6>Jul 15, 2020</h6>
                                    </li>
                                    <li>
                                        <h6><small>Duration</small></h6>
                                        <h6>3 months</h6>
                                    </li>
                                </ul>
                                <h6 class="ratingWrap">
                                    <span class="orangeTxt bold">4.8</span>
                                    <ul class="starRatings">
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                    </ul>
                                    <small>(2,731 people)</small>
                                </h6>
                                <ul class="bottomLinks">
                                    <h5 class="priceInfo">
                                        <span class="newPrice"><i>₹</i>700</span>
                                        <span class="realPrice"><i>₹</i>700</span>
                                    </h5>
                                    <a href="#" class="arrowBtn">View course</a>
                                </ul>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="tabbedCntWrap" id="showTab_live_class_cat02">
                    <div class="slickSwipe programSwipe popular-gov-exam">
                        <article class="courseListItem">
                            <a href="#" target="_blank">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/courseThumb01.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <div class="courseBtmWrap">
                                <ul class="courseLang">
                                    <li>English</li>
                                    <li>Hindi</li>
                                </ul>
                                <h4>Become a Product Manager</h4>
                                <h6><small>Personal Development</small></h6>
                                <h6><small>By Atul Verma</small></h6>
                                <ul class="courseAttr">
                                    <li>
                                        <h6><small>Start date</small></h6>
                                        <h6>Jul 15, 2020</h6>
                                    </li>
                                    <li>
                                        <h6><small>Duration</small></h6>
                                        <h6>3 months</h6>
                                    </li>
                                </ul>
                                <h6 class="ratingWrap">
                                    <span class="orangeTxt bold">4.8</span>
                                    <ul class="starRatings">
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                    </ul>
                                    <small>(2,731 people)</small>
                                </h6>
                                <ul class="bottomLinks">
                                    <h5 class="priceInfo">
                                        <span class="newPrice"><i>₹</i>700</span>
                                        <span class="realPrice"><i>₹</i>700</span>
                                    </h5>
                                    <a href="#" class="arrowBtn">View course</a>
                                </ul>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="tabbedCntWrap" id="showTab_live_class_cat03">
                    <div class="slickSwipe programSwipe popular-gov-exam">
                        <article class="courseListItem">
                            <a href="#" target="_blank">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/courseThumb02.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <div class="courseBtmWrap">
                                <ul class="courseLang">
                                    <li>English</li>
                                    <li>Hindi</li>
                                </ul>
                                <h4>Become a Product Manager</h4>
                                <h6><small>Personal Development</small></h6>
                                <h6><small>By Atul Verma</small></h6>
                                <ul class="courseAttr">
                                    <li>
                                        <h6><small>Start date</small></h6>
                                        <h6>Jul 15, 2020</h6>
                                    </li>
                                    <li>
                                        <h6><small>Duration</small></h6>
                                        <h6>3 months</h6>
                                    </li>
                                </ul>
                                <h6 class="ratingWrap">
                                    <span class="orangeTxt bold">4.8</span>
                                    <ul class="starRatings">
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                    </ul>
                                    <small>(2,731 people)</small>
                                </h6>
                                <ul class="bottomLinks">
                                    <h5 class="priceInfo">
                                        <span class="newPrice"><i>₹</i>700</span>
                                        <span class="realPrice"><i>₹</i>700</span>
                                    </h5>
                                    <a href="#" class="arrowBtn">View course</a>
                                </ul>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="tabbedCntWrap" id="showTab_live_class_cat04">
                    <div class="slickSwipe programSwipe popular-gov-exam">
                        <article class="courseListItem">
                            <a href="#" target="_blank">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/courseThumb03.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <div class="courseBtmWrap">
                                <ul class="courseLang">
                                    <li>English</li>
                                    <li>Hindi</li>
                                </ul>
                                <h4>Become a Product Manager</h4>
                                <h6><small>Personal Development</small></h6>
                                <h6><small>By Atul Verma</small></h6>
                                <ul class="courseAttr">
                                    <li>
                                        <h6><small>Start date</small></h6>
                                        <h6>Jul 15, 2020</h6>
                                    </li>
                                    <li>
                                        <h6><small>Duration</small></h6>
                                        <h6>3 months</h6>
                                    </li>
                                </ul>
                                <h6 class="ratingWrap">
                                    <span class="orangeTxt bold">4.8</span>
                                    <ul class="starRatings">
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                    </ul>
                                    <small>(2,731 people)</small>
                                </h6>
                                <ul class="bottomLinks">
                                    <h5 class="priceInfo">
                                        <span class="newPrice"><i>₹</i>700</span>
                                        <span class="realPrice"><i>₹</i>700</span>
                                    </h5>
                                    <a href="#" class="arrowBtn">View course</a>
                                </ul>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 voffset3 text-center">
                <ul class="groupButtonSet green">
                    <li><a href="#">View all live classes</a></li>
                    <li><a href="#">Subscription plans</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="basebg">
    <div class="container">        
        <div class="row text-center">
            <div class="col-xs-12">
                <h3 class="greenTxt">Not sure where to <span class="whiteTxt">begin</span>?</h3>
                <h6 class="greenTxt">No need to worry, Get a FREE counselling </h6>
            </div>
            <div class="col-xs-12 voffset2">
                <form name="callbackform" id="callbackform" class="validateForm darkBgForm" method="POST">
                    <div class="row center-md">
                        <div class="col-xs-12 col-md-10 col-lg-8">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 voffset2">
                                    <input type="text" name="full_name" class="form-control" placeholder="Full name">
                                </div>
                                <div class="col-xs-12 col-sm-4 voffset2">
                                    <input type="text" name="mobile_number" class="form-control numberOnly" maxlength="10" placeholder="Mobile numner">
                                </div>
                                <div class="col-xs-12 col-sm-4 voffset2">
                                    <button type="button" class="formBtn submitFormBtn fullWidth greenBg" id="callback_submit">Request a call back</button>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xs-12 voffset3">
                <h6 class="grayTxt"><small>We’ll never share your details. See our <a href="#" class="underline">Privacy Policy</a>.</small>
            </div>
        </div>
    </div>
</section>
<section class="silverBg">
    <div class="container">        
        <div class="row">
            <div class="col-xs-12 text-center">
                <h3>Best educators forever</h3>
                <h6>Our handpicked thousands of  educators who teach the way you love to learn.</h6>
            </div>
        </div>
        <div class="row center-md">    
            <div class="col-xs-12 col-md-10 col-lg-8 voffset2">
                <ul class="gridBox col6">
                    <li>
                        <img src="{{ asset('img/mentor1.jpg') }}" class="img-fluid" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/mentor2.jpg') }}" class="img-fluid" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/mentor3.jpg') }}" class="img-fluid" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/mentor4.jpg') }}" class="img-fluid" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/mentor5.jpg') }}" class="img-fluid" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/mentor6.jpg') }}" class="img-fluid" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/mentor7.jpg') }}" class="img-fluid" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/mentor8.jpg') }}" class="img-fluid" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/mentor9.jpg') }}" class="img-fluid" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/mentor10.jpg') }}" class="img-fluid" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/mentor8.jpg') }}" class="img-fluid" alt="">
                    </li>
                     <li>
                        <img src="{{ asset('img/mentor9.jpg') }}" class="img-fluid" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/mentor10.jpg') }}" class="img-fluid" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/mentor9.jpg') }}" class="img-fluid" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/mentor10.jpg') }}" class="img-fluid" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/mentor8.jpg') }}" class="img-fluid" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/mentor9.jpg') }}" class="img-fluid" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/mentor10.jpg') }}" class="img-fluid" alt="">
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 voffset3 text-center">
                <ul class="groupButtonSet green">
                    <li><a href="#">View all educators</a></li>
                    <li><a href="#">Become an educator</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="online-quizzes tabSecCntWrap">
    <div class="container">        
        <div class="row">
            <div class="col-xs-12 text-center">
                <h3>Online quizzes</h3>
                <h6>Objective type questions based on the latest exam pattern</h6>
            </div>
            <div class="col-xs-12 voffset2 text-center">
                <div class="scrollTabs">
                    <ul class="tabsButtonSet">
                        <li class="active" dataTabNav="quiz_cat01">Government exams</li>
                        <li dataTabNav="quiz_cat02">Law</li>
                        <li dataTabNav="quiz_cat03">MBA</li>
                        <li dataTabNav="quiz_cat04">Civil services</li>
                        <li dataTabNav="quiz_cat05">NET</li>
                        <li dataTabNav="quiz_cat06">Electrical Engg.</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 voffset2">
                <div class="tabbedCntWrap active" id="showTab_quiz_cat01">
                    <ul class="catTabListDisp" id="">
                        <li><a href="#">Bank Test Series</a></li>
                        <li><a href="#">SSC</a></li>
                        <li><a href="#">Railway</a></li>
                        <li><a href="#">IBPS Clerk</a></li>
                        <li><a href="#">SBI PO</a></li>
                        <li><a href="#">RRB Group D</a></li>
                        <li><a href="#">SSC MTS</a></li>
                        <li><a href="#">Indian Air Force</a></li>
                        <li><a href="#">Indian Navy</a></li>
                        <li><a href="#">Gate CE</a></li>
                        <li><a href="#">State PSC</a></li>
                        <li><a href="#">ESE CE</a></li>
                    </ul>
                </div>
                <div class="tabbedCntWrap" id="showTab_quiz_cat02">
                    <ul class="catTabListDisp" id="">
                        <li><a href="#">Gate CE</a></li>
                        <li><a href="#">State PSC</a></li>
                        <li><a href="#">ESE CE</a></li>
                        <li><a href="#">Railway</a></li>
                        <li><a href="#">IBPS Clerk</a></li>
                        <li><a href="#">SBI PO</a></li>                        
                        <li><a href="#">Indian Air Force</a></li>
                        <li><a href="#">Indian Navy</a></li>
                        <li><a href="#">Bank Test Series</a></li>
                        <li><a href="#">SSC</a></li>
                        <li><a href="#">RRB Group D</a></li>
                        <li><a href="#">SSC MTS</a></li>                        
                    </ul>
                </div>
                <div class="tabbedCntWrap" id="showTab_quiz_cat03">
                    MBA
                </div>
                <div class="tabbedCntWrap" id="showTab_quiz_cat04">
                    Civil
                </div>
                <div class="tabbedCntWrap" id="showTab_quiz_cat05">
                    NET
                </div>
                <div class="tabbedCntWrap" id="showTab_quiz_cat06">
                    Electrical
                </div>
            </div>
            <div class="col-xs-12 voffset3 text-center">
                <ul class="groupButtonSet green">
                    <li><a href="#">View all quizzes</a></li>
                    <li><a href="#">Request for new quizzes</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="whitebg shadowBtm exam-paper tabSecCntWrap">
    <div class="container">        
        <div class="row">
            <div class="col-xs-12 text-center">
                <h3>Previous year papers</h3>
                <h6>Get FREE access question & answers</h6>
            </div>
            <div class="col-xs-12 voffset2 text-center">
                <div class="scrollTabs">
                    <ul class="tabsButtonSet">
                        <li class="active" dataTabNav="prev_paper01">Government exams</li>
                        <li dataTabNav="prev_paper02">Law</li>
                        <li dataTabNav="prev_paper03">MBA</li>
                        <li dataTabNav="prev_paper04">Civil services</li>
                        <li dataTabNav="prev_paper05">NET</li>
                        <li dataTabNav="prev_paper06">Electrical Engg.</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 voffset2">
                <div class="tabbedCntWrap active" id="showTab_prev_paper01">
                    <ul class="catTabListDisp" id="">
                        <li><a href="#">Gate CE</a></li>
                        <li><a href="#">State PSC</a></li>
                        <li><a href="#">ESE CE</a></li>
                        <li><a href="#">Railway</a></li>
                        <li><a href="#">IBPS Clerk</a></li>
                        <li><a href="#">SBI PO</a></li>                        
                        <li><a href="#">Indian Air Force</a></li>
                        <li><a href="#">Indian Navy</a></li>
                        <li><a href="#">Bank Test Series</a></li>
                        <li><a href="#">SSC</a></li>
                        <li><a href="#">RRB Group D</a></li>
                        <li><a href="#">SSC MTS</a></li>                        
                    </ul>
                </div>
                <div class="tabbedCntWrap" id="showTab_prev_paper02">
                    <ul class="catTabListDisp" id="">
                        <li><a href="#">ESE CE</a></li>
                        <li><a href="#">RRB Group D</a></li>
                        <li><a href="#">SSC MTS</a></li>
                        <li><a href="#">Railway</a></li>
                        <li><a href="#">Gate CE</a></li>
                        <li><a href="#">State PSC</a></li>                        
                        <li><a href="#">IBPS Clerk</a></li>
                        <li><a href="#">SBI PO</a></li>                        
                        <li><a href="#">Indian Air Force</a></li>                        
                        <li><a href="#">SSC</a></li>                        
                        <li><a href="#">Indian Navy</a></li>
                        <li><a href="#">Bank Test Series</a></li>                     
                    </ul>
                </div>
                <div class="tabbedCntWrap" id="showTab_prev_paper03">
                    MBA
                </div>
                <div class="tabbedCntWrap" id="showTab_prev_paper04">
                    Civil
                </div>
                <div class="tabbedCntWrap" id="showTab_prev_paper05">
                    NET
                </div>
                <div class="tabbedCntWrap" id="showTab_prev_paper06">
                    Electrical
                </div>
            </div>
            <div class="col-xs-12 voffset3 text-center">
                <ul class="groupButtonSet green">
                    <li><a href="#">View all papers</a></li>
                    <li><a href="#">Request for new paper</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="silverBg">
    <div class="container">        
        <div class="row">
            <div class="col-xs-12 text-center">
                <h3>Success stories</h3>
                <h6>10+ million people are already learning on our platform</h6>
            </div>
            <div class="col-xs-12 voffset2">
                <div class="slickSwipe col3Swipe testimonialList">
                    <article>
                        <img src="{{asset('img/krutika-bupendar.jpg')}}" class="profileCircle" align="">
                        <div class="infoWrap">
                            <h6 class="">krutika bupendar</h6>
                            <h6 class="grayTxt"><small>MBA Program, 2019</small> | <small>New Delhi</small></h6>
                            <h6 class="grayTxt"><small>Student</small></h6>
                        </div>
                        <blockquote>
                            It’s a really big deal to offer an online MBA that’s a real MBA at a price that’s achievable. This program is totally disrupting higher education.
                        </blockquote>
                        <div class="infoBtmWrap">                            
                            <ul class="starRatings">   
                                <span class="orangeTxt bold">4.8</span>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li></li>
                            </ul>
                            <small class="timeDisp">30 min ago</small>
                        </div>
                    </article>
                    <article>
                        <img src="{{asset('img/PranjalDubey.jpg')}}" class="profileCircle" align="">
                        <div class="infoWrap">
                            <h6 class="">Pranjal Dubey</h6>
                            <h6 class="grayTxt"><small>IAS specialist</small> | <small>Kanpur</small></h6>
                            <h6 class="grayTxt"><small>Educator</small></h6>
                        </div>
                        <blockquote>
                            It’s a really big deal to offer an online MBA that’s a real MBA at a price that’s achievable. This program is totally disrupting higher education.
                        </blockquote>
                        <div class="infoBtmWrap">                            
                            <ul class="starRatings">   
                                <span class="orangeTxt bold">4.8</span>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li></li>
                            </ul>
                            <small class="timeDisp">30 min ago</small>
                        </div>
                    </article>
                    <article>
                        <img src="{{asset('img/nikita-appaswami.jpg')}}" class="profileCircle" align="">
                        <div class="infoWrap">
                            <h6 class="">nikita appaswami</h6>
                            <h6 class="grayTxt"><small>IAS, 2019</small> | <small>New Delhi</small></h6>
                            <h6 class="grayTxt"><small>Student</small></h6>
                        </div>
                        <blockquote>
                            It’s a really big deal to offer an online MBA that’s a real MBA at a price that’s achievable. This program is totally disrupting higher education.
                        </blockquote>
                        <div class="infoBtmWrap">                            
                            <ul class="starRatings">   
                                <span class="orangeTxt bold">4.8</span>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li></li>
                            </ul>
                            <small class="timeDisp">30 min ago</small>
                        </div>
                    </article>
                    <article>
                        <img src="{{asset('img/chan.jpg')}}" class="profileCircle" align="">
                        <div class="infoWrap">
                            <h6 class="">Chanan</h6>
                            <h6 class="grayTxt"><small>MBA Program, 2019</small> | <small>New Delhi</small></h6>
                            <h6 class="grayTxt"><small>Student</small></h6>
                        </div>
                        <blockquote>
                            It’s a really big deal to offer an online MBA that’s a real MBA at a price that’s achievable. This program is totally disrupting higher education.
                        </blockquote>
                        <div class="infoBtmWrap">                            
                            <ul class="starRatings">   
                                <span class="orangeTxt bold">4.8</span>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li></li>
                            </ul>
                            <small class="timeDisp">30 min ago</small>
                        </div>
                    </article>
                    <article>
                        <img src="{{asset('img/raman-bhargav.jpg')}}" class="profileCircle" align="">
                        <div class="infoWrap">
                            <h6 class="">raman bhargav</h6>
                            <h6 class="grayTxt"><small>SSC exam expert</small> | <small>New Delhi</small></h6>
                            <h6 class="grayTxt"><small>Educatior</small></h6>
                        </div>
                        <blockquote>
                            It’s a really big deal to offer an online MBA that’s a real MBA at a price that’s achievable. This program is totally disrupting higher education.
                        </blockquote>
                        <div class="infoBtmWrap">                            
                            <ul class="starRatings">   
                                <span class="orangeTxt bold">4.8</span>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li></li>
                            </ul>
                            <small class="timeDisp">30 min ago</small>
                        </div>
                    </article>
                    <article>
                        <img src="{{asset('img/vikas-kumar.jpg')}}" class="profileCircle" align="">
                        <div class="infoWrap">
                            <h6 class="">vikas-kumar</h6>
                            <h6 class="grayTxt"><small>Law expert</small> | <small>New Delhi</small></h6>
                            <h6 class="grayTxt"><small>Student</small></h6>
                        </div>
                        <blockquote>
                            It’s a really big deal to offer an online MBA that’s a real MBA at a price that’s achievable. This program is totally disrupting higher education.
                        </blockquote>
                        <div class="infoBtmWrap">                            
                            <ul class="starRatings">   
                                <span class="orangeTxt bold">4.8</span>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li></li>
                            </ul>
                            <small class="timeDisp">30 min ago</small>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-xs-12 voffset3 text-center">
                <ul class="listButton">
                    <a href="#" class="linkBtn base">Read all success stories</a>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="">
    <div class="container">
        <div class="row whiteTxt text-center">
            <div class="col-xs-12 col-sm-6 basebg">
                <div class="row center-sm">
                    <div class="col-xs-12 col-sm-6">
                        <div class="row">
                            <div class="col-xs-12 voffset5">
                                <h3>It’s time to start</h3>
                                <h6>It’s time to start</h6>
                            </div>
                            <div class="col-xs-12 voffset4">
                                <ul class="listButton fullWrap">
                                    <a href="#" class="linkBtn green">Get started</a>
                                </ul>
                            </div>
                             <div class="col-xs-12 voffset1">
                                <ul class="listButton fullWrap">
                                    <a href="#" class="linkBtn green">See our plans</a>
                                </ul>
                            </div>
                            <div class="col-xs-12 voffset5">&nbsp;</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 greenBg">
                <div class="row center-sm">
                    <div class="col-xs-12 col-sm-6">
                        <div class="row">
                            <div class="col-xs-12 voffset5">
                                <h3>Have any query?</h3>
                                <h6>Quick connect our support team.</h6>
                            </div>
                            <div class="col-xs-12 voffset4">
                                <h6>Call us between 8 AM -  8 PM</h6>
                                <h5><a href="tel:18000000000">1800 000 0000</a></h5>
                            </div>
                             <div class="col-xs-12 voffset4">
                                <h6>Call us between 8 AM -  8 PM</h6>
                                <h5><a href="mailto:support@onlineadhyapak.com">support@onlineadhyapak.com</a></h5>
                            </div>
                            <div class="col-xs-12 voffset5">&nbsp;</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 whitebg">
                <div class="row center-sm">
                    <div class="col-xs-12 col-sm-11">
                        <div class="row">
                            <div class="col-xs-12 tex voffset5">
                                <h3>Everything is here</h3>
                                <h6>Get Success in Your hand Start Study Anytime Anywhere</h6>
                            </div>
                            <div class="col-xs-12 tex voffset3">
                                <div class="row">
                                    <div class="col-xs-6 col-md-3 voffset4">
                                        <h2 class="bold greenTxt">1.6L<sup>+</sup></h2>
                                        <h6><small>Enrolled students</small></h6>
                                    </div>
                                    <div class="col-xs-6 col-md-3 voffset4">
                                        <h2 class="bold greenTxt">2.5K<sup>+</sup></h2>
                                        <h6><small>Enrolled students</small></h6>
                                    </div>
                                    <div class="col-xs-6 col-md-3 voffset4">
                                        <h2 class="bold greenTxt">12.5K<sup>+</sup></h2>
                                        <h6><small>Active courses</small></h6>
                                    </div>
                                    <div class="col-xs-6 col-md-3 voffset4">
                                        <h2 class="bold greenTxt">5.89K<sup>+</sup></h2>
                                        <h6><small>Quizzes</small></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="row between-sm middle-sm">
                                    <div class="col-xs-12 col-sm-5 voffset4">
                                        <ul class="slickSwipe heroHomeSwipe">
                                            <li>
                                                <img src="{{asset('img/relax-study.png')}}" class="img-fluid" alt="">
                                            </li>
                                            <li>
                                                <img src="{{asset('img/relax-study.png')}}" class="img-fluid" alt="">
                                            </li>
                                            <li>
                                                <img src="{{asset('img/relax-study.png')}}" class="img-fluid" alt="">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-12 col-sm-5 text-left voffset4">
                                        <div class="col-xs-12">
                                            <h3>Why choose <span class="greenTxt">onlineadhyapak</span>?</h3>
                                            <h6>Top reasons to join us</h6>
                                        </div>
                                        <div class="col-xs-12">
                                            <ul>
                                                <li class="voffset3">
                                                    <h5>Best experienced educators</h5>
                                                    <p><small>From top tier colleges with 20+ years of experience</small></p>
                                                </li>
                                                <li class="voffset3">
                                                    <h5>Convenient & Safe at your home</h5>
                                                    <p><small>No need to travel, learn at the comfort</small></p>
                                                </li>
                                                <li class="voffset3">
                                                    <h5></h5>
                                                    <p><small></small></p>
                                                </li>
                                                <li class="voffset3">
                                                    <h5>2-way LIVE & interactive</h5>
                                                    <p><small>Interaction between student & mentors, better than
recorded videos</small></p>
                                                </li>
                                                <li class="voffset3">
                                                    <h5>Best experienced educators</h5>
                                                    <p><small>From top tier colleges with 20+ years of experience</small></p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 voffset5">&nbsp;</div>
                </div>
            </div>
        </div>
        <div class="row whiteTxt text-center">
            <div class="col-xs-12 col-sm-6 basebg">
                <div class="row center-sm">
                    <div class="col-xs-12 col-sm-6">
                        <div class="row">
                            <div class="col-xs-12 voffset5">
                                <h3>FREE video class</h3>
                                <h6>Start learning for free today.</h6>
                            </div>
                            <div class="col-xs-12 voffset4">
                                <ul class="listButton fullWrap">
                                    <a href="#" class="linkBtn green">Unlock Now!</a>
                                </ul>
                            </div>
                            <div class="col-xs-12 voffset5">&nbsp;</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 basebg">
                <div class="row center-sm">
                    <div class="col-xs-12 col-sm-6">
                        <div class="row">
                            <div class="col-xs-12 voffset5">
                                <h3>FREE live class demo</h3>
                                <h6>Request a live class demo from our experts</h6>
                            </div>
                             <div class="col-xs-12 voffset4">
                                <ul class="listButton fullWrap">
                                    <a href="#" class="linkBtn green">Schedule a live demo</a>
                                </ul>
                            </div>
                            <div class="col-xs-12 voffset5">&nbsp;</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="whitebg our-partner">
    <div class="container">        
        <div class="row">
            <div class="col-xs-12 text-center">
                <h3>Our partners</h3>
                <h6>Our network is growing every day.</h6>
            </div>
            <div class="col-xs-12 voffset2">
                <div class="slickSwipe partnerLogos">
                    <div>
                        <img src="{{asset('img/partner-logo-blank.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div>
                        <img src="{{asset('img/partner-logo-blank.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div>
                        <img src="{{asset('img/partner-logo-blank.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div>
                        <img src="{{asset('img/partner-logo-blank.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div>
                        <img src="{{asset('img/partner-logo-blank.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div>
                        <img src="{{asset('img/partner-logo-blank.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div>
                        <img src="{{asset('img/partner-logo-blank.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div>
                        <img src="{{asset('img/partner-logo-blank.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div>
                        <img src="{{asset('img/partner-logo-blank.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div>
                        <img src="{{asset('img/partner-logo-blank.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div>
                        <img src="{{asset('img/partner-logo-blank.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div>
                        <img src="{{asset('img/partner-logo-blank.jpg')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xs-12 text-center voffset4 greenTxt">
                <h3>Are you an institute?</h3>
                <h6>Let's partner with us and add highest value to education.</h6>
            </div>
            <div class="col-xs-12 voffset3 text-center">
                <ul class="listButton">
                    <a href="#" class="linkBtn green">Become a partner</a>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="silverBg feature-blog">
    <div class="container">        
        <div class="row">
            <div class="col-xs-12 text-center">
                <h3>Latest articles</h3>
                <h6>Read articles and watch videos</h6>
            </div>
            <div class="col-xs-12 voffset2">
                <div class="row">
                    <div class="col-xs-12 col-sm-3">
                        <article class="blogArticle">
                            <span class="videoPost">Video</span>
                            <a href="#" target="_blank">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/blogthumb01.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <h6>Stepping up in the face of the COVID-19 threat</h6>
                        </article>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <article class="blogArticle">
                            <a href="#" target="_blank">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/blogthumb02.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <h6>Stepping up in the face of the COVID-19 threat</h6>
                        </article>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <article class="blogArticle">
                            <a href="#" target="_blank">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/blogthumb03.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <h6>Stepping up in the face of the COVID-19 threat</h6>
                        </article>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <article class="blogArticle">
                            <span class="videoPost">Video</span>
                            <a href="#" target="_blank">
                                <div class="imgZoomWrap">
                                    <img src="{{asset('img/blogthumb04.jpg')}}" class="img-fluidThumb" alt="">
                                </div>
                            </a>
                            <h6>Stepping up in the face of the COVID-19 threat</h6>
                        </article>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 voffset3 text-center">
                <ul class="listButton">
                    <a href="#" class="linkBtn white">Discover more articles</a>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
