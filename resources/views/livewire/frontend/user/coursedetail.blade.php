<section class="half">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 voffset2">
				<h5>Hello, {{auth::user()->name}}</h5>
				<a href="{{ url('/dashboard') }}" class="greenTxt underline">< Go to dashbaord</a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 voffset3">
				<div class="row">
					<div class="col-xs-12 voffset2">
						<h3>{{$user_video_detail->name}}</h3>
					</div>
					<div class="col-xs-12 voffset2">
						<h5 class="greenTxt bold">Course Videos playlist</h5>
					</div>
					<div class="col-xs-12 voffset2">
						<div class="videoListWrap">
							<div class="videoLeftView">
								<video controls src="https://interactive-examples.mdn.mozilla.net/media/examples/flower.webm" type="video/webm">
								</video>
							</div>
							<div class="courseListing">
								<div class="playlistWrap">
									@if(!empty($user_video_detail->video_course_sections))
									@foreach($user_video_detail->video_course_sections as $key=> $section)
									<div class="chapterVidSecWrap">
										@if($loop->first)
										<div class="secVidHead active">
									    @else
									    <div class="secVidHead">
									    @endif
											<h5>Ch. {{$loop->index+1}}: {{$section->section_name}}</h5>
											<h6>{{$section->video_lessons->count()}} videos</h6>
										</div>
										@if(!empty($section->video_lessons))
										@foreach($section->video_lessons as $key=>$lesson)
										@if($loop->parent->first)
										<div class="secVidListCnt active">
										@else
										<div class="secVidListCnt">
										@endif	
											<article data-video-source="https://interactive-examples.mdn.mozilla.net/media/examples/flower.webm">
												<h6>{{$lesson->title }}</h6>
												<p>{{$lesson->video_duration}} min</p>
											</article>
											<!-- <article data-video-source="https://interactive-examples.mdn.mozilla.net/media/examples/flower.webm">
												<h6>Welcome to the class</h6>
												<p>6 min</p>
											</article> -->
										</div>
										@endforeach
										@endif
									</div>
									@endforeach
									@endif
									<!-- <div class="chapterVidSecWrap">
										<div class="secVidHead">
											<h5>Ch. 2: Introduction</h5>
											<h6>2 videos</h6>
										</div>
										<div class="secVidListCnt">
											<article data-video-source="https://interactive-examples.mdn.mozilla.net/media/examples/flower.webm">
												<h6>Welcome to the class</h6>
												<p>12 min</p>
											</article>
											<article data-video-source="https://interactive-examples.mdn.mozilla.net/media/examples/flower.webm">
												<h6>Welcome to the class</h6>
												<p>6 min</p>
											</article>
											<article data-video-source="https://interactive-examples.mdn.mozilla.net/media/examples/flower.webm">
												<h6>Welcome to the class</h6>
												<p>6 min</p>
											</article>
											<article data-video-source="https://interactive-examples.mdn.mozilla.net/media/examples/flower.webm">
												<h6>Welcome to the class</h6>
												<p>6 min</p>
											</article>
										</div>
									</div>
									<div class="chapterVidSecWrap">
										<div class="secVidHead">
											<h5>Ch. 1: Introduction</h5>
											<h6>2 videos</h6>
										</div>
										<div class="secVidListCnt">
											<article data-video-source="https://interactive-examples.mdn.mozilla.net/media/examples/flower.webm">
												<h6>Welcome to the class</h6>
												<p>12 min</p>
											</article>
											<article data-video-source="https://interactive-examples.mdn.mozilla.net/media/examples/flower.webm">
												<h6>Welcome to the class</h6>
												<p>6 min</p>
											</article>
										</div>
									</div>
									<div class="chapterVidSecWrap">
										<div class="secVidHead">
											<h5>Ch. 2: Introduction</h5>
											<h6>2 videos</h6>
										</div>
										<div class="secVidListCnt">
											<article data-video-source="https://interactive-examples.mdn.mozilla.net/media/examples/flower.webm">
												<h6>Welcome to the class</h6>
												<p>12 min</p>
											</article>
											<article data-video-source="https://interactive-examples.mdn.mozilla.net/media/examples/flower.webm">
												<h6>Welcome to the class</h6>
												<p>6 min</p>
											</article>
											<article data-video-source="https://interactive-examples.mdn.mozilla.net/media/examples/flower.webm">
												<h6>Welcome to the class</h6>
												<p>6 min</p>
											</article>
											<article data-video-source="https://interactive-examples.mdn.mozilla.net/media/examples/flower.webm">
												<h6>Welcome to the class</h6>
												<p>6 min</p>
											</article>
											<article data-video-source="https://interactive-examples.mdn.mozilla.net/media/examples/flower.webm">
												<h6>Welcome to the class</h6>
												<p>6 min</p>
											</article>
											<article data-video-source="https://interactive-examples.mdn.mozilla.net/media/examples/flower.webm">
												<h6>Welcome to the class</h6>
												<p>6 min</p>
											</article>
										</div>
									</div>
									<div class="chapterVidSecWrap">
										<div class="secVidHead">
											<h5>Ch. 1: Introduction</h5>
											<h6>2 videos</h6>
										</div>
										<div class="secVidListCnt">
											<article data-video-source="https://interactive-examples.mdn.mozilla.net/media/examples/flower.webm">
												<h6>Welcome to the class</h6>
												<p>12 min</p>
											</article>
											<article data-video-source="https://interactive-examples.mdn.mozilla.net/media/examples/flower.webm">
												<h6>Welcome to the class</h6>
												<p>6 min</p>
											</article>
										</div>
									</div> -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="row">
							<div class="col-xs-12 voffset5">
								<h5 class="greenTxt bold">Course Quizzes</h5>
							</div>							
							<div class="col-xs-12 col-sm-3 col-md-3 voffset3">
								<video controls src="https://interactive-examples.mdn.mozilla.net/media/examples/flower.webm" type="video/webm">
								</video>
								<h6><small>CSS Tutorial for Beginners - 01 - Introduction to CSS</small></h6>
								<h6 class="voffset1"><a href="#" class="greenTxt underline">View history & score</a></h6>
							</div>
							<div class="col-xs-12 col-sm-3 col-md-3 voffset3">
								<video controls src="https://interactive-examples.mdn.mozilla.net/media/examples/flower.webm" type="video/webm">
								</video>
								<h6><small>CSS Tutorial for Beginners - 01 - Introduction to CSS</small></h6>
								<h6 class="voffset1"><a href="#" class="greenTxt underline">View history & score</a></h6>
							</div>
						</div>
						<hr class="voffset3">
					</div>
					<div class="col-xs-12">
						<div class="row">
							<div class="col-xs-12 voffset5">
								<h5 class="greenTxt bold">Course doubts</h5>
							</div>							
							<div class="col-xs-12 col-sm-10 col-md-8">
								<div class="col-xs-12 col-md-10 col-lg-8 voffset2">
									<ul class="faqsItemDisp">
										<li>
											<div class="questionHead active">Not getting output -weatherapp</div>
											<div class="answerCntWrap active">
												<h6>
													<small>Asked on: Jul 22, 2020 08:43pm</small>
													<small>Answered on: Jul 23, 2020 11:08am</small>
												</h6>
												<hr>
												<p>nodejs is free and I think google cloud is also free for personal usage, low traffic. But you can do alot with the free version. I have some API setup on heroku free version, works fine :)</p>
											</div>
										</li>
										<li>
											<div class="questionHead">The type not getting set.</div>
											<div class="answerCntWrap">
												<h6>
													<small>Asked on: Jul 22, 2020 08:43pm</small>
													<small>Answered on: Jul 23, 2020 11:08am</small>
												</h6>
												<hr>
												<p>I can't reproduce that issue. I do not get a boolean. Have you tried downloading the lecture code and comparing your code with Andrew's to see if there are any discrepancies?</p>
											</div>
										</li>										
									</ul>
								</div>
								<hr class="voffset3">
							</div>
							<div class="col-xs-12 voffset5">
								<h5 class="greenTxt bold">Ask your doubts</h5>
							</div>
							<div class="col-xs-12 col-sm-10 col-md-8">
								<form class="validateForm" name="ask_doubts" method="POST">
									<div class="row">
										<div class="col-xs-12 col-sm-6 voffset2">
											<div class="custmSelect fullSqr">
												<select name="courseRating">
													<option value="">Choose chapter in this course</option>
													<option value="">Ch. 1: Introduction</option>
													<option value="">Ch. 2: Introduction</option>
													<option value="">Ch. 3: Introduction</option>
												</select>
											</div>
										</div>
										<div class="col-xs-12 col-sm-6 voffset2">
											<div class="custmSelect fullSqr">
												<select name="courseRating">
													<option value="">Choose Topic</option>
													<option value="">Topic 1: Welcome to the class</option>
												</select>
											</div>
										</div>
										<div class="col-xs-12 voffset2">
											<label>Type your question</label>
											<textarea class="form-control" name="review_description" ></textarea>
										</div>
										<div class="col-xs-12 voffset2">
											<input type="text" name="" class="form-control" placeholder="Question title">
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4 voffset2">
		                                   <button type="button" class="formBtn submitFormBtn fullWidth darkBg" id="submit_review">Submit your doubt</button>
		                                </div>
									</div>
								</form>
							</div>							
						</div>
						<hr class="voffset3">
					</div>
					<div class="col-xs-12">
						<div class="row">
							<div class="col-xs-12 voffset5">
								<h5 class="greenTxt bold">Add your review</h5>
							</div>
							<div class="col-xs-12 col-sm-6">
								<form name="course_review" id="course_review" method="POST">
									<div class="row">
										<div class="col-xs-12 voffset3">
											<label>Rate this course</label>
											<div class="custmSelect fullSqr">
												<select name="courseRating">
													<option value="">Excellent</option>
													<option value="">Good</option>
													<option value="">Neutral</option>
													<option value="">Unsatisfied</option>
													<option value="">Very Unsatisfied</option>
												</select>
											</div>
										</div>
										<div class="col-xs-12 voffset3">
											<label>Review title</label>
											<input type="text" name="review_title" class="form-control">
										</div>
										<div class="col-xs-12 voffset3">
											<label>Review Description</label>
											<textarea class="form-control" name="review_description" placeholder="">
											</textarea>
										</div>
										<div class="col-xs-12 voffset3">
											<label>Add Pros</label>
											<textarea class="form-control" name="review_pros" placeholder="">
											</textarea>
										</div>
										<div class="col-xs-12 voffset3">
											<label>Add Cons</label>
											<textarea class="form-control" name="review_cons" placeholder="">
											</textarea>
										</div>
										<div class="col-xs-12 voffset3">
											<label>Would you recommend this course?</label>
											<ul>
												<li>
													<label for="recommend_opt_yes" class="inCheck">Yes
				                                    <input type="checkbox" 
				                                    class="" name="recommend_opt" value=""  id="recommend_opt_yes" checked>
				                                    <span class="checkme"></span>
				                                	</label>
												</li>
												<li>
													<label for="recommend_opt_no" class="inCheck">No
				                                    <input type="checkbox" 
				                                    class="" name="recommend_opt" value=""  id="recommend_opt_no">
				                                    <span class="checkme"></span>
				                                	</label>
												</li>
												<li>
													<label for="recommend_opt_notsure" class="inCheck">I am not sure
				                                    <input type="checkbox" 
				                                    class="" name="recommend_opt" value=""  id="recommend_opt_notsure">
				                                    <span class="checkme"></span>
				                                	</label>
												</li>
											</ul>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 col-sm-6 voffset2">
		                                   <button type="button" class="formBtn submitFormBtn fullWidth darkBg" id="submit_review">Submit review</button>
		                                </div>
									</div>
								</form>
							</div>
						</div>
						<hr class="voffset3">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
