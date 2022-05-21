<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-9">
				<div class="bgrCntLft">
					<div class="row">
						<div class="col-xs-12">
							<img src="{{$blog_detail->image}}" class="img-fluid" alt="">
						</div>
						<div class="col-xs-12 voffset3">
							<h1 class="pageHeading">{{$blog_detail->title}}</h1>
							<h6 class="subHeading grayTxt">The tech conference season is just getting started in Europe and North America and many of those conferences will have live training sessions.</h6>
							<hr>
						</div>
						<div class="col-xs-12">
							<div class="row">
								<div class="col-xs-12 col-sm-4 voffset2">
									<h6><small><a href="#" class="greenTxt bold">{{$blog_detail->blog_category->title ?? ''}}</a></small></h6>
								</div>
								<div class="col-xs-12 col-sm-4 voffset2">
									<h6><small>Written by <a href="#" class="greenTxt bold">
										@if(!empty($blog_detail->blogauthors))
										 <?php
                                          $blogauthors = collect($blog_detail->blogauthors)
                                                        ->map(function($authors,$key){
                                                        	return $authors->name;
                                                        })->implode(', ');
										 ?>
										 {{$blogauthors}}
										@endif
										Md Saifullah
									</a></small></h6>
								</div>
								<div class="col-xs-12 col-sm-4 voffset2 text-right">
									<h6><small>On <a href="#" class="greenTxt bold">{{$blog_detail->created_at->format('F j, Y')}}</a></small></h6>
								</div>
								<div class="col-xs-12 voffset3">
									<hr>
								</div>
							</div>
							<!-- <div class="row">
								<div class="col-xs-12 col-sm-4 voffset2">
									<h6><small><a href="#" class="greenTxt bold">Live Classes</a></small></h6>
								</div>
								<div class="col-xs-12 col-sm-4 voffset2">
									<h6><small>Written by <a href="#" class="greenTxt bold">Steve Burge</a></small></h6>
								</div>
								<div class="col-xs-12 col-sm-4 voffset2 text-right">
									<h6><small>On <a href="#" class="greenTxt bold">March 12, 2013</a></small></h6>
								</div>
								<div class="col-xs-12 voffset3">
									<hr>
								</div>
							</div> -->
						</div>
						<div class="col-xs-12">
							<div class="row">
								<div class="col-xs-12 voffset2">
									<h6><small>Share this post on</small></h6>
									<ul class="blogShareLink">
										<li><a href="#" target="_blank">Facebook</a></li>
										<li><a href="#" target="_blank">Twitter</a></li>
										<li><a href="#" target="_blank">Instagram</a></li>
										<li><a href="#" target="_blank">Pinterest</a></li>
									</ul>
									<hr>
								</div>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="blogContentWrap">
								<p>
									{!! $blog_detail->description !!}
								</p>
								
							</div>
						</div>
						<div class="col-xs-12">
							<div class="row">
								<div class="col-xs-12 voffset2">
									<h6><small>Share this post on</small></h6>
									<ul class="blogShareLink">
										<li><a href="#" target="_blank">Facebook</a></li>
										<li><a href="#" target="_blank">Twitter</a></li>
										<li><a href="#" target="_blank">Instagram</a></li>
										<li><a href="#" target="_blank">Pinterest</a></li>
									</ul>
									<hr>
								</div>
							</div>
						</div>
					</div>
				</div>			
			</div>
			<div class="col-xs-12 col-md-3">
				<div class="row">
					<div class="col-xs-12">
						<div class="bgrCntRgt">
							<div class="row">
								<div class="col-xs-12">
									<a href="#">
										<img src="https://img-a.udemycdn.com/course/240x135/1561458_7f3b.jpg" class="img-fluid" alt="">
										<h6 class="voffset1">CSS - The Complete Guide 2020 (incl. Flexbox, Grid & Sass)</h6>
									</a>
								</div>
							</div>
							<div class="row voffset3">
								<div class="col-xs-12">
									<a href="#">
										<img src="https://img-a.udemycdn.com/course/240x135/818990_57c0_3.jpg" class="img-fluid" alt="">
										<h6 class="voffset1">Git a Web Developer Job: Mastering the Modern Workflow</h6>
									</a>
								</div>
							</div>
							<div class="row voffset3">
								<div class="col-xs-12">
									<a href="#">
										<img src="https://img-a.udemycdn.com/course/240x135/1213952_e17d_2.jpg" class="img-fluid" alt="">
										<h6 class="voffset1">Python 3: Deep Dive (Part 1 - Functional)</h6>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row voffset1">
					<div class="col-xs-12">
						<div class="bgrCntRgt">
							<div class="row">
								<div class="col-xs-12">
									<h6 class="text-uppercase bold">You may also like</h6>
								</div>
								<div class="col-xs-12">
									<ul class="sideBarList">
										<li><a href="#">Why Swift UI Should Be on the Radar of Every Mobile Developer</a></li>
										<li><a href="#">Why Splunk Certification is a Top Skill for Data Scientists</a></li>
										<li><a href="#">Information Security Analyst: How to Get Started in This Growing IT Career</a></li>
										<li><a href="#">Information security analysts: Projected job growth and salary</a></li>
										<li><a href="#">What is Cyber Security? A Beginner’s Guide</a></li>
										<li><a href="#">Machine learning vs. deep learning: what’s the difference?</a></li>
										<li><a href="#">What is Data Modeling? Common Tools, Techniques, and Model Types</a></li>
										<li><a href="#">Workplace Wellness Tips for Employees and Managers</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row voffset1">
					<div class="col-xs-12">
						<div class="bgrCntRgt">
							<div class="row">
								<div class="col-xs-12">
									<a href="#">
										<img src="https://img-a.udemycdn.com/course/240x135/833442_b26e_4.jpg" class="img-fluid" alt="">
										<h6 class="voffset1">Angular & NodeJS - The MEAN Stack Guide [2020 Edition]</h6>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
