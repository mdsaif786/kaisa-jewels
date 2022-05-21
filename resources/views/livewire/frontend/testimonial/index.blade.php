<div class="stickyMain voffset4">
	<div class="stickyNavTop">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="scrollTabs">
						<ul class="catListRadio">

							<li wire:key="all">
								<input type="radio" id="faq_all" value="" name="faq_categories" checked>
								<label for="cat_all" class="blogCatList">All</label>
							</li>
								<li>
								<input type="radio" id="faq_student" value="student" name="faq_categories">
								<label for="faq_student" class="blogCatList">rr1</label>
							</li>
							<li>
								<input type="radio" id="faq_Instructor" value="instructor" name="faq_categories">
								<label for="faq_Instructor" class="blogCatList">rr2</label>
							</li>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="sntCntWrap">
		<section class="half">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 voffset3">
						<div class="gridMasonry">
							@if(!empty($testimonials))
							@foreach($testimonials as $key=>$testimonial)
							<article>
								<div class="content">
									<img src="{{$testimonial->user->profile_photo}}" class="profileCircle" alt="">
									
									<h6 class="greenTxt voffset1">{{$testimonial->user->name}}</h6>
									<h6><small>sdfsdfs, Student</small></h6>
									<h6 class="grayTxt"><small>{{$testimonial->updated_at->diffForHumans()}}</small></h6>
									<hr>
		                            <p> {!!$testimonial->message !!}</p>
								</div>
							</article>
							@endforeach
							@endif
							@if(!empty($liveReviews))
							@foreach($liveReviews as $key=>$liveReview)
							<article>
								<div class="content">
									<img src="{{$liveReview->user->profile_photo}}" class="profileCircle" alt="">
									
									<h6 class="greenTxt voffset1">{{$liveReview->user->name}}</h6>
									<h6><small>dsdfsdf, Student</small></h6>
									<h6 class="grayTxt"><small>{{$liveReview->updated_at->diffForHumans()}}</small></h6>
									<hr>
		                            <p> {!!$liveReview->message !!}</p>
								</div>
							</article>
							@endforeach
							@endif
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="whitebg">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h3>Want to sumbit your stories</h3>
						<h6>Please <a href="{{URL::to('/login')}}" class="greenTxt underline">login</a> in to your account and add your stories</h6>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
