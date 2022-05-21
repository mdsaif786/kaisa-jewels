{{-- @section('title',$video_course->name);
@section('keywords',$video_course->meta_keywords);
@section('description',$video_course->meta_description); --}}

<div class="stickyMain voffset4">
	<div class="stickyNavTop">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="scrollTabs">
						<ul class="catListRadio">
							<li wire:key="all">
								<input type="radio" id="cat_all" value="" name="blog_categories" wire:model="cat" checked>
								<label for="cat_all" class="blogCatList">All</label>
							</li>
							@if(!empty($blogs_category))
							@foreach($blogs_category as $category)
								<li wire:key="{{$loop->index}}">
								<input type="radio" id="cat_{{$category->id}}" value="{{$category->id}}" name="blog_categories" wire:model="cat">
								<label for="cat_{{$category->id}}" class="blogCatList">{{$category->title}}</label>
								</li>
							@endforeach
							@endif
							{{-- <li>
								<input type="radio" id="cat_live_class" value="live_class" name="blog_categories">
								<label for="cat_live_class" class="blogCatList">Live class</label>
							</li>
							<li>
								<input type="radio" id="cat_quizzes" value="quizzes" name="blog_categories">
								<label for="cat_quizzes" class="blogCatList">Quizzes</label>
							</li>
							<li>
								<input type="radio" id="cat_elearning" value="elearning" name="blog_categories">
								<label for="cat_elearning" class="blogCatList">eLearning trends</label>
							</li>
							<li>
								<input type="radio" id="cat_lms" value="lms" name="blog_categories">
								<label for="cat_lms" class="blogCatList">LMS</label>
							</li>
							<li>
								<input type="radio" id="cat_technology" value="technology" name="blog_categories">
								<label for="cat_technology" class="blogCatList">Technology</label>
							</li>
							<li>
								<input type="radio" id="cat_career_tips" value="career_tips" name="blog_categories">
								<label for="cat_career_tips" class="blogCatList">Carrer tips</label>
							</li> --}}
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
					<div class="col-xs-12">
						<div class="gridMasonry">
							@if(!empty($blogs))
							@foreach($blogs as $blog)
							<article>
								<a href="{{url('blog/'.$blog->slug)}}" class="content">
									<div class="imgZoomWrap">
	                                    <img src="{{$blog->image}}" class="img-fluidThumb" alt="">
	                                </div>
		                            <h5 class="post-title">{{$blog->title}}</h5>
		                            <p>{!! $blog->description !!}</p>
								</a>
							</article>
							@endforeach
							@endif
							<!-- <article>
								<a href="#" class="content">
		                            <h5 class="post-title">6 ways to keep your students motivated if exams have been postponed</h5>
		                            <p>When it comes to learning a language, knowing there’s an exam on the horizon can motivate students to study hard</p>
								</a>
							</article>
							<article>
								<a href="#" class="content">
									<div class="imgZoomWrap">
	                                    <img src="https://blog.wiziq.com/wp-content/uploads/2018/09/blended-learning-challenges-420x280.jpg" class="img-fluidThumb" alt="">
	                                </div>
		                            <h5 class="post-title">Tackling Challenges of Blended Learning</h5>
		                            <p>We need technology in every classroom and in every student and teacher’s hand, because it is the pen and paper of our time, and it is the lens through which we experience much of our</p>
								</a>
							</article>
							<article>
								<a href="#" class="content">
		                            <h5 class="post-title">How to Make Visual Communication in Online Courses Effective</h5>
		                            <p>What would you remember more of? The paragraph or the picture? “Luna had decorated her bedroom ceiling with five beautifully painted faces: Harry, Ron, Hermione, Ginny, and Neville. They were not moving as the</p>
								</a>
							</article>
							<article>
								<a href="#" class="content">
									<div class="imgZoomWrap">
	                                    <img src="https://blog.wiziq.com/wp-content/uploads/2018/07/Shareable-Content-Object-Reference-Model-2-420x280.jpg" class="img-fluidThumb" alt="">
	                                </div>
		                            <h5 class="post-title">SCORM? It’s time to move on!</h5>
		                            <p>In Google Trends, if you search for people’s interest over time in SCORM, the results do not look so promising. SCORM is fading out, and it is evident in the falling interest of people. So</p>
								</a>
							</article>
							<article>
								<a href="#" class="content">
		                            <h5 class="post-title">Video conferencing software for instructor-led learning</h5>
		                            <p>Teachers who teach online are continually looking for platforms that are easy to use and can facilitate the best delivery of their courses to the students. These teachers are not only spirited about the courses</p>
								</a>
							</article>
							<article>
								<a href="#" class="content">
									<div class="imgZoomWrap">
	                                    <img src="https://www.english.com/blog/wp-content/uploads/2020/04/platforms.jpg" class="img-fluidThumb" alt="">
	                                </div>
		                            <h5 class="post-title">Teach and learn with confidence using our Pearson English platforms</h5>
		                            <p>Technology is a great enabler – teachers all around the world rely on digital platforms for communication, support, and to</p>
								</a>
							</article>
							<article>
								<a href="#" class="content">
		                            <h5 class="post-title">After Sales Services that Your LMS provider must give to you</h5>
		                            <p>So, you’ve done the hardest part of choosing your LMS software and are now, going to buy it. However, what should your expectations be of the after sales services by your provider? Have you ever.</p>
								</a>
							</article>
							<article>
								<a href="#" class="content">
									<div class="imgZoomWrap">
	                                    <img src="https://blog.wiziq.com/wp-content/uploads/2018/03/become-online-teacher-420x280.jpg" class="img-fluidThumb" alt="">
	                                </div>
		                            <h5 class="post-title">9 Useful Strategies to Become an Online Teacher</h5>
		                            <p>Online learning has taken education beyond the confines of a classroom, crossing geographical barriers and transformed the modern education system. The name David Calle may not ring a bell until you realize that the number</p>
								</a>
							</article>
							<article>
								<a href="#" class="content">
		                            <h5 class="post-title">MOOC: ‘Swayam’ -Spearheading the Education Revolution in India</h5>
		                            <p>SWAYAM is the world’s biggest MOOC platform, a program initiated by the Government of India. It is the world’s largest initiative of its kind taken by any government to consolidate the education governing bodies under</p>
								</a>
							</article>
							<article>
								<a href="#" class="content">
		                            <h5 class="post-title">7 Amazing Facts about Flipped Learning</h5>
		                            <p>Flipped Classrooms have been around as an offshoot of blended learning methodology for more than a decade, now. In the flipped classroom, your students study at home and bring the homework to school. All conceptual</p>
								</a>
							</article>
							<article>
								<a href="#" class="content">
		                            <h5 class="post-title">How to create an impactful online customer training program?</h5>
		                            <p>When customers buy your product, they invest their money and faith in you- expecting your support when they are using the product. During onboarding, to help customers understand the product better, businesses use product tutorials</p>
								</a>
							</article>
							<article>
								<a href="#" class="content">
									<div class="imgZoomWrap">
	                                    <img src="https://blog.wiziq.com/wp-content/uploads/2018/06/video-conference-etiquette-1-420x280.jpg" class="img-fluidThumb" alt="">
	                                </div>
		                            <h5 class="post-title">Tips for video conferencing etiquette</h5>
		                            <p>Gone are the days when education dissemination was housed within a college or university campus; knowledge was shared with the limited, locally residing learners. Technologies such as video conferencing software and remote device connectivity application</p>
								</a>
							</article>
							<article>
								<a href="#" class="content">
		                            <h5 class="post-title">Teaching programming languages online – challenges and how to address them</h5>
		                            <p>In today’s digital world, there is hardly a process that would not be accessible or executable online. From the automated production of advanced machinery to guiding doctors online for surgeries, robotics and hybrid bionic architecture</p>
								</a>
							</article>
							<article>
								<a href="#" class="content">
		                            <h5 class="post-title">Redesign Your LMS for Corporate Training</h5>
		                            <p>Learning Management System may be defined as an eLearning software through which educational institutes and corporates deliver educational content (called online courses). Through the LMS the teachers/ instructors/trainers can administer the content, have a live</p>
								</a>
							</article> -->
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
