@section('title','Past Order')
<section class="silverBg">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 voffset2">
				<h5>Hello,<span>@auth {{auth::user()->name}} @endauth</h5>
				<a href="{{ url('/dashboard') }}" class="underline">< Go to dashboard</a>
			</div>
		</div>
		<div class="row">
			@livewire('frontend.user.user-sidebar')
			<div class="col-xs-12 col-sm-8 col-md-9 voffset3">
				<div class="row">
					<div class="col-xs-12 voffset2">
						<h1 class="lgHeading">Order summary</h1>
					</div>
					<div class="col-xs-12 voffset2">
						<div class="fullFlexList">
							@foreach($order_lists as $key=>$order_list)
							<article>
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
										<h6 class="grayTxt"><small>Order ID</small></h6>
										<h6>{{$order_list->order->invoice_prefix.$order_list->order->invoice_no}}</h6>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
										<h6 class="grayTxt"><small>Order Time</small></h6>
										<h6>@if(!is_null($order_list->order->date_modified))
											{{$order_list->order->date_modified->format('j M, Y h:i A')}}
											@else

											@endif
										</h6>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
									<h6 class="grayTxt text-uppercase"><small>Total Book Amount</small></h6>
									<h6 class="bold">{{$order_list->order->total_book_amount}}</h6>
								</div>
									{{-- <div class="col-xs-12 col-sm-6 col-md-4 voffset3">
										<h6 class="grayTxt"><small>Tax Invoice</small></h6>
										<h6>OATI677DL905444</h6>
									</div> --}}
								</div>
								<div class="row">
									
									
									<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
										<h6 class="grayTxt"><small>Book name</small></h6>
										<h6>{{$order_list->book->name ?? ''}}</h6>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
										<h6 class="grayTxt"><small>Book Price</small></h6>
										<h6 class="bold"><i>₹</i>{{$order_list->book->price ?? ''}}</h6>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
										<h6 class="grayTxt"><small>Quantity</small></h6>
										<h6>{{$order_list->quantity}}</h6>
									</div>
									<div class="col-xs-12 voffset3">
										<div class="btnsWrap">
											<a href="{{ url('/order/'.$order_list->order->id) }}" >Order details</a>
											<a href="#" >Cancel Order</a>
										</div>
									</div>
								</div>
							</article>
							@endforeach

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
