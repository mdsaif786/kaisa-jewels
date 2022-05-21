<div class="col-xs-12 col-sm-4 col-md-3 voffset4">
    <ul class="leftDBMenu">
        <li><a href="{{ url('/dashboard') }}"><span class="icon-dashboard"></span>Dashboard</a></li>
        <li><a href="{{ url('/orderlist') }}"><span class="icon-video-order"></span>Order</a></li>
        <li><a href="{{ url('/wishlist') }}"><span class="icon-wishlist"></span><i>{{$wish_count ?? '0'}}</i>Wishlist</a></li>
        <li><a href="{{ url('/address') }}"><span class="icon-address"></span>Address</a></li>
        <li><a href="{{ url('/setting') }}"><span class="icon-setting"></span>Setting</a></li>
        <li><a href="{{ url('/') }}"><span class="icon-logout"></span>Logout</a></li>
    </ul>
</div>
