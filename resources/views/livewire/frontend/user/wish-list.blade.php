<section class="silverBg">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 voffset2">
				<h5>Hello, {{auth::user()->name}}</h5>
				<a href="{{ url('/dashboard') }}" class=" underline">< Go to dashboard</a>
			</div>
		</div>
		<div class="row">
			@livewire('frontend.user.user-sidebar')
			<div class="col-xs-12 col-sm-8 col-md-9 voffset3">
				<div class="row">
					<div class="col-xs-12 voffset2">
						<h5>Wishlist - <span class="">{{count($wish_lists) ?? '0'}} items</span></h5>
						 @if (session()->has('message'))
			            <div class="alert alert-success">
			                {{ session('message') }}
			            </div>
			        @endif
					</div>

					<div class="col-xs-12 voffset2">
						<div class="fullFlexList">
							@if(!empty($wish_lists))
							@foreach($wish_lists as $course)
							
							<article>
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
										<h6 class="grayTxt"><small>Book Name</small></h6>
										<h6>{{$course->book->name ?? ''}}</h6>
									</div>
							
									<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
										<h6 class="grayTxt"><small>Book Price</small></h6>
										<h6 class=" bold"><i>₹</i>{{$course->book->price ?? ''}}</h6>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
										<h6 class="grayTxt"><small>Added Date </small></h6>
										<h6>{{$course->created_at->format('Y-m-d')}}</h6>
									</div>
									<div class="col-xs-12 voffset3">
										<div class="btnsWrap voffset2">
											<button wire:click="moveToCart({{$course->book_id}},{{$course->id}})" style="background: black" type="button" class="smallBtnLink text-uppercase">Move to cart</button>
											<button style="background: black" type="button" class="smallBtnLink text-uppercase grayTxt"
											onclick="confirm('Are you sure want remove ?') || event.stopImmediatePropagation()"
											wire:click="remove({{$course->id}})">Remove</button>
										</div>
									</div>
								</div>
							</article>
							@endforeach
							@endif
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
