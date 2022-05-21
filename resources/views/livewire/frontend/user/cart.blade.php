<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="pageHeading">Hello, @auth {{auth::user()->name}} @endauth @guest @endguest</h1>
				<h6 class="pageSubHeading">There are <span class="bold">{{$cart_count}}</span> items in your cart.</h6>
			</div>
			<div class="col-xs-12 voffset3">
				<a href="{{url('/wishlist')}}" class="smallBtnLink text-uppercase underline">Add items wishlist</a>
			</div>
			<div class="col-xs-12 voffset3">
				@php $total_item=0; @endphp
			   @if(!empty($order_products))
				@foreach($order_products as $key=>$order_item)

					@if($order_item->cart_item_type==1)
					<?php

                    $getItem=$order_item->book;
                    $total_item=$total_item+$order_item->total_amount;
                     ?>
					@else
					@endif
					<div class="cartRow">
						<div class="row middle-sm center-sm">
							<div class="col-xs-12 col-sm-8 text-left">
								<h5>{{$getItem->name}}</h5>
								<h6><small>Cart ID:{{config('app.invoice_prefixed')}}{{$getItem->id}}</small></h6>
							    <h6><small class="">{{$getItem->category->name ?? ''}}</small></h6>
								<div class="btnsWrap voffset2">
									<button type="button" class="text-uppercase" wire:click="removedCartItem({{$getOrder->id}},{{$order_item->id}})">Remove</button>
									<button wire:click="cartItemMoveToWishList({{$order_item->book_id}},{{$getOrder->id}},{{$order_item->id}})" type="button" class="text-uppercase">Add my wishlist</button>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 text-right">
								<h3 class="bold"><i>{{$getItem->symbol}} </i> {{$order_item->total_amount}}</h3>
								<h6>
									<small>(Inclusive of all taxes)</small><br>
									<small class="strickOut"><i>{{$getItem->symbol}} </i> {{$getItem->mrp}}</small>
									<small> {{$getItem->discount}} % off</small>
								</h6>

							</div>
						</div>
					</div>
				@endforeach
				@else
					<div class="cartRow">
						<div class="row middle-sm center-sm">
							<h5>No Item in the Cart</h5>
						</div>
					</div>
				@endif

			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 voffset3">
				<h5>Total cart amount <span class=" bold"><i>₹</i>{{$total_item}}</h5>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-5">
				<h6><small>Do you have any coupon?</small></h6>
				<div class="row">
						<div class="col-xs-8 voffset2">
							 @if($is_valid_coupon)
							<input type="text" wire:model.lazy="coupon_code" class="form-control dashed" placeholder="Enter coupon code" disabled="">
							@else
							<input type="text" wire:model.lazy="coupon_code" class="form-control dashed" placeholder="Enter coupon code">
							@endif
						</div>
						<div class="col-xs-4 voffset2">
							@if($is_valid_coupon)
							<button type="button" class="smallBtnSubmit fullWidth black text-uppercase" wire:click="applyCoupon" disabled="">Apply</button>
							@else
							<button type="button" class="smallBtnSubmit fullWidth black text-uppercase" wire:click="applyCoupon" wire:loading.class="gray">Apply</button>
							@endif
						</div>
					</div>
				<div wire:loading wire:target="applyCoupon">
			        Applying Coupon.......
			    </div>
			     @if($is_valid_coupon)
				<h6 class="greenTxt voffset2"><small>Your coupon code <span class="bold">{{$coupon_code}}</span> successfully applied!</small></h6>
				<h6 class="bold redTxt"><small><i>₹</i>{{$total_item}} - <i>₹</i>{{$coupon_discount->discount}} = <i>₹</i>{{($total_item-$coupon_discount->discount)}}</small></h6>
				@else
				<div wire:loading.remove>
				<h6 class="redTxt voffset2"><small>Do you have any coupon? Try It</small></h6>
				</div>
				@endif
				
			</div>
		</div>
		<div class="row voffset3">
			<div class="col-xs-12 voffset3">

				<h5>You are going to pay <span class="bold"><i>₹</i>
					@if($is_valid_coupon)
					{{($total_item-$coupon_discount->discount)}}
					@else
					{{$total_item}}
					@endif
				</h5>
			</div>
			<div class="col-xs-12 voffset1">
				<div class="btnsWrap">
					<a href="{{URL::to('/checkout')}}" class="formBtn submitFormBtn"><span>Proceed to checkout<i></i></span></a>
				</div>
			</div>
		</div>
	</div>
</section>
