<section class="silverBg">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="pageHeading">Hello, {{auth::user()->name}}</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 voffset3">
				<ul class="dbIconList">
					<li><a href="{{ url('/orderlist') }}"><span class="icon-video-order"></span>Order</a></li>
					<li><a href="{{ url('/wishlist') }}"><span class="icon-wishlist"></span><i>{{$wish_count}}</i>Wishlist</a></li>
					<li><a href="{{ url('/address') }}"><span class="icon-address"></span>Address</a></li>
					<li><a href="{{ url('/setting') }}"><span class="icon-setting"></span>Setting</a></li>
					<li><a href="{{ url('/') }}"><span class="icon-logout"></span>Logout</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
