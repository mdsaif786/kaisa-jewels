<section class="half">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 voffset2">
				<h5>Hello, {{auth::user()->name}}</h5>
				<a href="{{ url('/dashboard') }}" class="greenTxt underline">< Go to dashbaord</a>
			</div>
		</div>
		<div class="row">
			@livewire('frontend.user.user-sidebar')
			<div class="col-xs-12 col-sm-8 col-md-9 voffset3">
				<div class="row">
					<div class="col-xs-12 voffset2">
						<h5>Video Class List</h5>
					</div>
					<div class="col-xs-12 voffset2">
						<div class="fullFlexList">
							@if(!empty($user_video_courses))
							@foreach($user_video_courses as $course)
							<article>								
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
										<h6 class="grayTxt"><small>Course ID</small></h6>
										<h6>{{$course->id}}</h6>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
										<h6 class="grayTxt"><small>Course name</small></h6>
										<h6>{{$course->name}} </h6>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
										<h6 class="grayTxt"><small>Educator by</small></h6>
										<h6>
									    @if(!empty($course->educators))		
										<?php
	                                    $educators = collect($course->educators)
	                                            ->map(function($value, $key) {
	                                                return $value->name;
	                                            })->implode(',');
	                                    ?>
	                                    {{$educators}}
	                                    @endif
										</h6>
									</div>	
									<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
										<h6 class="grayTxt"><small>Course Language</small></h6>
										<h6>
									    @if(!empty($course->languages))
										<?php
							            $languages = collect($course->languages)
							                    ->map(function($value, $key) {
							                        return $value->name;
							                    })->implode(',');
							            ?>
							            {{$languages}}
							            @endif							            
										</h6>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
										<h6 class="grayTxt"><small>No. of videos</small></h6>
										<h6>
									   {{$course->video_lessons_count ?? ''}}	
										</h6>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
										<h6 class="grayTxt"><small>Course attributes</small></h6>
										<h6><span>15 quizzes</span></h6>
									</div>									
									<div class="col-xs-12 voffset3">
										<div class="btnsWrap">
											<a href="{{ url('/user/coursedetail/'.$course->slug) }}" class="smallBtnLink text-uppercase greenTxt">View course details</a>
										</div>
									</div>								
								</div>
							</article>
							@endforeach
							@endif
							<!-- <article>								
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
										<h6 class="grayTxt"><small>Course ID</small></h6>
										<h6>13</h6>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
										<h6 class="grayTxt"><small>Course name</small></h6>
										<h6>Advanced CSS and Sass: Flexbox, Grid, Animations and More!</h6>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
										<h6 class="grayTxt"><small>Educator by</small></h6>
										<h6>Mercedes Dooley,</h6>
									</div>	
									<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
										<h6 class="grayTxt"><small>Course Language</small></h6>
										<h6>Hindi, English</h6>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
										<h6 class="grayTxt"><small>No. of videos</small></h6>
										<h6>22</h6>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 voffset3">
										<h6 class="grayTxt"><small>Course attributes</small></h6>
										<h6><span>15 Quizzes</span></h6>
									</div>									
									<div class="col-xs-12 voffset3">
										<div class="btnsWrap">
											<a href="{{ url('/user/coursedetail') }}" class="smallBtnLink text-uppercase greenTxt">View course details</a>
										</div>
									</div>								
								</div>
							</article> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
