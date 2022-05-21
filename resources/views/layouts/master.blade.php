<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','Online Book store : Sthula.com')</title>
    <meta charset="utf-8" name="keywords" content="@yield('keywords','default keywords')">
    <meta charset="utf-8" name="description" content="@yield('description','default description')">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" data-turbolinks-track="reload">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" data-turbolinks-track="reload">
    <link href="{{ asset('css/inner.css') }}" rel="stylesheet" data-turbolinks-track="reload">
    <link href="{{ asset('css/db.css') }}" rel="stylesheet" data-turbolinks-track="reload">
    @yield('css')
    <livewire:styles>
        <livewire:scripts>
</head>

<body>
    <!-- <div class="topHeader">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="topHeaderCnt">
                    <div class="callWrap">
                        <a href="tel:+919540109179"><i class="icon-call"></i>+91 95401 09179</a>
                    </div>
                    <div class="headerOfferNav">
                        Summer sale discount <span class="orangeTxt">Off 50%!</span> <a href="#">Shop Now</a>
                    </div>

                    <x-slot-currency/>
                </div>
            </div>
        </div>
    </div>
</div> -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="headerWrap">
                        <button class="toggleHeaderNav"><i>Site Menu</i></button>
                        <a href="{{ URL::to('/') }}" class="brand-logo"><img src="{{ asset('img/sthula-logo.svg') }}"
                                alt="Sthula brand logo"></a>
                        <nav class="header-Navigation">
                            <ul>
                                <li><a href="{{URL::to('/new-arrivals')}}">New Arrivals</a></li>
                                <x-category-header-menu></x-category-header-menu>
                                <!-- <li><a href="{{ URL::to('/offers') }}">Offers</a></li> -->
                                <li><a href="{{ URL::to('/collections') }}">Collections</a></li>
                            </ul>
                        </nav>
                        <div class="right-header">
                            <ul>
                                <li><a href="{{URL::to('/wishlist')}}">
                                    <i class="wishlist"><u>
                                            {{\App\Models\Order::cartcount()}}
                                        </u>Wishlist</i></a></li>
                                <li class="dropDownAccount">
                                    <a href="javascript:void(0);"><i class="user">Login/register</i></a>
                                    <ul class="ddmenuWrap">
                                        @auth
                                        <li><a href="{{URL::to('/home')}}">Dashboard</a></li>
                                        <li>
                                            <a href="#" class=""
                                                onclick="event.preventDefault(); document.getElementById('logoutform').submit();">

                                                {{ trans('global.logout') }}
                                            </a>
                                        </li>
                                        @else
                                        <li><a href="{{URL::to('/login')}}">Login</a></li>
                                        <li><a href="{{route('register')}}">Register</a></li>
                                        @endauth
                                    </ul>
                                </li>
                                <li><a href="{{ URL::to('/cart') }}" class="cartWrap">
                                        <i class="cart">my cart</i>
                                        <u>
                                            {{\App\Models\Order::cartcount()}}
                                        </u>
                                    </a>
                               {{--  <li class="currencyWrap">
                                    <span class="selected_currency" data-currency="INR" data-symbool="₹"
                                        id="header_selected_currency">INR</span>
                                    <ul class="currencyList">
                                        <li data-symbool="$" data-currency="USD">USD</li>
                                        <li data-symbool="€" data-currency="EURO">EURO</li>
                                        <li data-symbool="₹" data-currency="INR">INR</li>
                                    </ul>
                                </li> --}}

                                <x-slot-currency/>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="subHeader">
                        <div class="searchWrap">
                            <form class="form_search" name="form_search" id="form_search" method="get"
                                action="{{URL::to('/search')}}">
                                <label for="search_keyword" class="lblHead">Search by keyword</label>
                                <input type="search" name="q"
                                    placeholder="Search by title, author, subject or ISNB here..." id="search_keyword">
                                <button type="button" id="btn_search">Search Products</button>
                            </form>
                        </div>
                        <x-sub-header-menu></x-sub-header-menu>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>@yield('content')</main>
    <section class="btmInfoBg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="scrollCntWrap">
                        <div class="infoGrid">
                            <div class="item">
                                <img src="{{asset('icon/icon-truck.svg')}}" class="iconThumb" alt="">
                                <h5>Payment & Delivery</h5>
                                <h6>Free shipping for orders over $299</h6>
                            </div>
                            <div class="item">
                                <img src="{{asset('icon/icon-return.svg')}}" class="iconThumb" alt="">
                                <h5>Return & Refund</h5>
                                <h6>Free 100% money back guarantee within 30 days</h6>
                            </div>
                            <div class="item">
                                <img src="{{asset('icon/icon-support.svg')}}" class="iconThumb" alt="">
                                <h5>Support 24/7</h5>
                                <h6>Contact us 24 hours a day, 7 days a week</h6>
                            </div>
                            <div class="item">
                                <img src="{{asset('icon/icon-secure-payment.svg')}}" class="iconThumb" alt="">
                                <h5>100% Payment Secure</h5>
                                <h6>We ensure secure payment with STHULA</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3 voffset4">
                    <a href="{{ URL::to('/') }}" class="brand-logo"><img src="{{ asset('img/sthula-logo-white.svg') }}"
                            alt="Sthula brand logo in gray color"></a>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 voffset4">
                    <h5>Follow us on</h5>
                    <ul class="circleLink">
                        <li><a href="#" target="_blank" rel="noreferrer"><i class="facebook"></i>facebook</a></li>
                        <li><a href="#" target="_blank" rel="noreferrer"><i class="twitter"></i>twitter</a></li>
                        <li><a href="#" target="_blank" rel="noreferrer"><i class="youtube"></i>youtube</a></li>
                        <li><a href="#" target="_blank" rel="noreferrer"><i class="linkedin"></i>linkedin</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 voffset4">
                    <h5>Quick Connect</h5>
                    <ul class="circleLink">
                        <li><a href="tel:+919540109179"><i class="callus"></i>Call us</a></li>
                        <li><a href="#"><i class="whatsapp"></i>whatsapp</a></li>
                        <li><a href="mailto:support@sthula.com"><i class="mailus"></i>Write email to sthula</a></li>
                    </ul>
                </div>
            </div>
            <div class="row voffset4">
                <div class="col-xs-12">
                    <h5>Stay connected</h5>
                    <p>Keep up on the best new books, timely features, and special offers.</p>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-7">
                    <form id="newsletter_subscription" class="validateForm" method="POST">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 voffset2">
                                <label for="subscibe_name" class="lblHead">subscribe name</label>
                                <input type="text" id="subscibe_name" class="form-control" placeholder="Full name"
                                    name="full_name">
                            </div>
                            <div class="col-xs-12 col-sm-4 voffset2">
                                <label for="subscibe_email" class="lblHead">subscribe email</label>
                                <input type="email" id="subscibe_email" placeholder="* Email address"
                                    class="form-control" name="email">
                            </div>
                            <div class="col-xs-12 col-sm-4 voffset2">
                                <button type="button" class="formBtn submitFormBtn fullWidth"
                                    id="subscribe_submit">Subscribe now</button>
                            </div>
                            <div class="col-xs-12 voffset2">
                                <p><small>We’ll never share your details. See our <a
                                            href="{{ URL::to('/privacy-policy') }}" target="_blank"
                                            class="underline">Privacy policy</a>.</small></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row voffset4">
                <div class="col-xs-12">
                    <h5>Online payment</h5>
                    <p>We do accept all type of payment method.</p>
                </div>
                <div class="col-xs-12">
                    <ul class="payment-card-list">
                        <li class="payment-card-paypal">PayPal</li>
                        <li class="payment-card-visa">visa</li>
                        <li class="payment-card-master">master</li>
                        <li class="payment-card-american-express">American express</li>
                        <li class="payment-card-discover">Discover</li>
                    </ul>
                </div>
            </div>
            <div class="row voffset4">
                <div class="col-xs-6 col-sm-3 voffset4">
                    <h5>Company</h5>
                    <ul class="footerLink">
                        <li><a href="{{ URL::to('/about') }}">About</a></li>
                        <li><a href="{{ URL::to('/contact') }}">Contact</a></li>
                        <li><a href="{{ URL::to('/') }}">Blog</a></li>
                       {{--  <li><a href="{{ URL::to('/') }}">Testimonials</a></li> --}}
                        {{-- <li><a href="{{ URL::to('/') }}">FAQs</a></li> --}}
                        {{-- <li><a href="{{ URL::to('/sitemap') }}">Sitemap</a></li> --}}
                        <li>© <?php echo date("Y"); ?></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-sm-3 voffset4">
                    <h5>For Buyers</h5>
                    <ul class="footerLink">
                        <li><a href="{{ route('register') }}">Register</a></li>
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{URL::to('/wishlist')}}">Wishlist</a></li>
                        <li><a href="{{URL::to('/orderlist')}}">Order History</a></li>
                       
                    </ul>
                </div>

                <div class="col-xs-6 col-sm-3 voffset4">
                    <h5>Legals</h5>
                    <ul class="footerLink">
                        <li><a href="{{ URL::to('/privacy-policy') }}">Privacy policy</a></li>
                        <li><a href="{{ URL::to('/return-policy') }}">Return Policy</a></li>
                       
                        <li><a href="{{ URL::to('/shipping-policy') }}">Shipping policy</a></li>
                        <li><a href="{{ URL::to('/terms-and-condition') }}">Terms of use</a></li>
                        {{-- <li><a href="{{ URL::to('/guarantee') }}">Guarantee</a></li> --}}
                        <li><a href="{{ URL::to('/cookies-policies') }}">Cookies Policy</a></li>
                        <li><a href="{{ URL::to('/privacy-policy') }}">GDPR</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-sm-3 voffset4">
                    <h5>Quick links</h5>
                    <ul class="footerLink">
                        <li><a href="{{URL::to('/contact')}}">Customer Service</a></li>
                       {{--  <li><a href="#">Student Discount</a></li> --}}
                        <li><a href="{{URL::to('/business-with-us')}}">Business with us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </footer>

    <script src="{{ asset('js/jquery-3.5.1.min.js') }}" data-turbolinks-track="reload" defer></script>
    <script src="{{ asset('js/slick.min.js') }}" data-turbolinks-track="reload" defer></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}" data-turbolinks-track="reload" defer></script>
    <script src="{{ asset('js/form.js') }}" data-turbolinks-track="reload" defer></script>
    <script src="{{ asset('js/sliders.js') }}" data-turbolinks-track="reload" defer></script>
    <script src="{{ asset('js/functions.js') }}" data-turbolinks-track="reload" defer></script>
   
    <script src="{{asset('/js/app.js')}}"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
    $('#search_keyword').on('click', function (e) {
        var keyCode = e.keyCode || e.which;
        var srchVal = $(this).val();
        if(srchVal.length >= 2){
           document.location.href ="<?=URL::to('/search?q=')?>" + srchVal ;
        }
    });

    $('#btn_search').on('click', function (e) {
        var keyCode = e.keyCode || e.which;
        var srchVal =$('#search_keyword').val();
        if(srchVal.length >= 2){
           document.location.href ="<?=URL::to('/search?q=')?>" + srchVal ;
        }
    });
});
    </script>

    @yield('scripts')
</body>

</html>
