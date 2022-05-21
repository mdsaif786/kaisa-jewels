<section class="half">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 voffset2">
				<h5>Hello, @auth {{auth::user()->name}} @endauth @guest @endguest</h5>
				<a href="{{ url('/dashboard') }}" class=" underline">< Go to dashboard</a>
			</div>
		</div>
		<div class="row">
			@livewire('frontend.user.user-sidebar')
			<div class="col-xs-12 col-sm-8 col-md-9 voffset3">
				<div class="row">
					<div class="col-xs-12 voffset2">
						<h1 class="lgHeading">Order details</h1>
					</div>
					<div class="col-xs-12 voffset2">
						<div class="row">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
										<h6 class="grayTxt"><small>Order ID</small></h6>
										<h6>{{$orders->invoice_prefix.$orders->invoice_no}}</h6>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
										<h6 class="grayTxt"><small>Order Time</small></h6>
										<h6>@if(!is_null($orders->date_modified))
											{{$orders->date_modified->format('j M, Y h:i A')}}
											@endif
										</h6>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
										<h6 class="grayTxt"><small>Tax Invoice</small></h6>
										<h6>{{$orders->invoice_prefix.$orders->invoice_no}}</h6>
									</div>
									<div class="col-xs-12"><hr></div>
								</div>
								<h6 class="bold voffset4">Book details - <span class="">{{$order_items->count()}} items</span></h6>
								<div class="row">
								@foreach($order_items as $order_item)
								

									
									<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
										<h6 class="grayTxt"><small>Book name</small></h6>
										<h6><a href="{{URL::to('/book/'.$order_item->book->slug ?? '')}}" target="_blank">{{$order_item->book->name ?? ''}}</a></h6>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
										<h6 class="grayTxt"><small>Book Price</small></h6>
										<h6 class=" bold"><i>₹</i>{{$order_item->price}}</h6>
									</div>
								<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
										<h6 class="grayTxt"><small>Book Quantity</small></h6>
										<h6>{{$order_item->quantity}}</h6>
									</div>
								@endforeach
									<div class="col-xs-12"><hr></div>
								</div>

								<h6 class="bold voffset4">Payment details</h6>
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
										<h6 class="grayTxt"><small>Payment Method</small></h6>
										<h6>{{$orders->getPaymentStatus()}}</h6>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
										<h6 class="grayTxt"><small>Payment Company</small></h6>
										<h6>{{$orders->getPaymentMethod()}}</h6>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
										<h6 class="grayTxt"><small>Coupon applied</small></h6>
										<h6>₹ {{$orders->coupon_discount ?? '0.00'}}</h6>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
							<h6 class="grayTxt text-uppercase"><small>Shipping Charge</small></h6>
							<h6 class="bold">{{$orders->shipping_charge ?? '0.00'}}</h6>
						</div>
									<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
										<h6 class="grayTxt"><small>Total paid amount</small></h6>
										<h6 class=" bold"><i>₹</i>{{$orders->total_book_amount}}</h6>
									</div>
									<div class="col-xs-12"><hr></div>
								</div>
								<div class="row">
									<div class="col-xs-12 voffset3">
										<div class="btnsWrap">
											<a href="{{URL::to('/order/'.$orders->id)}}">Print invoice</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
