@section('title','Order Confirmation')
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="pageHeading">Hi, <span>@auth {{auth::user()->name}} @endauth</span></h1>
				<h6 class="pageSubHeading bold">Thank your for placing your order</h6>
				<p class="voffset1">You will receive a email soon regarding to your payment and order details.</p>
				<hr>
			</div>
			<div class="col-xs-12 voffset4">
				<div class="topAttrDisp">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
							<h6 class="grayTxt text-uppercase"><small>Order ID</small></h6>
							<h6 class="bold">{{$order->invoice_prefix.$order->invoice_no}}</h6>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
							<h6 class="grayTxt text-uppercase"><small>Order DateTime</small></h6>
							<h6 class="bold">{{$order->date_modified->diffForHumans()}}</h6>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
							<h6 class="grayTxt text-uppercase"><small>Total Book Amount</small></h6>
							<h6 class="bold">{{$order->total_book_amount}}</h6>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
							<h6 class="grayTxt text-uppercase"><small>Coupon Discount</small></h6>
							<h6 class="bold">{{$order->coupon_discount ?? '0.00'}}</h6>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
							<h6 class="grayTxt text-uppercase"><small>Shipping Charge</small></h6>
							<h6 class="bold">{{$order->shipping_charge ?? '0.00'}}</h6>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
							<h6 class="grayTxt text-uppercase"><small>Payment Status</small></h6>
							<h6 class="bold">{{$order->getPaymentStatus()}}</h6>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
							<h6 class="grayTxt text-uppercase"><small>Payment Method</small></h6>
							<h6 class="bold">{{$order->getPaymentMethod()}}</h6>
						</div>
						<div class="col-xs-12"><hr></div>
					</div>
					@foreach($shopping_item as $key=>$order_item)
					@if($order_item->cart_item_type==1)
					<?php
                    $getItem=$order_item->book;
                    
                     ?>
					@else
					@endif
					<div class="row">
						{{-- <div class="col-xs-12 col-sm-6 col-md-4 voffset3">
							<h6 class="grayTxt text-uppercase"><small>Order ID</small></h6>
							<h6 class="bold">{{$getItem->id}}</h6>
						</div> --}}
						<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
							<h6 class="grayTxt text-uppercase"><small>Book name</small></h6>
							<h6 class="bold">{{$getItem->name}}</h6>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
							<h6 class="grayTxt text-uppercase"><small>Book Price</small></h6>
							<h6 class="bold"><i>₹</i>{{$order_item->total_amount}}</h6>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
							<h6 class="grayTxt text-uppercase"><small>Quantity</small></h6>
							<h6 class="bold">{{$order_item->quantity}}</h6>
						</div>
					</div>
					<div class="col-xs-12"><hr></div>
					@endforeach
				</div>
			</div>
			<div class="col-xs-12 voffset4">
				<div class="btnsWrap">
					<a href="{{URL::to('/order/'.$order->id)}}" class="linkBtn"><span>Order details<i></i></span></a>
					<a href="{{URL::to('/invoice/'.$order->id)}}" class="linkBtn"><span>Print invoice<i></i></span></a>
				</div>
			</div>
		</div>
	</div>
</section>
