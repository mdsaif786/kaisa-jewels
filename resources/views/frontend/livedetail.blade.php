@extends('layouts.master')
@section('content')
<section class="half">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<ol class="breadcrumb">
				  <li><a href="#">Programs</a></li>
				  <li><a href="#">Acadmic</a></li>
				  <li><a href="#">Software Engg.</a></li>
				</ol>
			</div>
		</div>
		<div class="row voffset3">
			<div class="col-xs-12 col-md-7">
				<h1 class="pageHeading">Data Science 2020 : Complete Data Science & Machine Learning</h1>
				<h6 class="pageSubHeading"></h6>
			</div>
		</div>
		<div class="row voffset2">
			<div class="col-xs-12">
				<div class="topIntroCourse">
					<div class="row middle-sm">
						<div class="col-xs-12 col-sm-6">
							<div class="row">
								<div class="col-xs-12 col-sm-11">
									<img src="{{ asset('img/courseThumb01.jpg')}}" class="img-fluid" alt="">
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 voffset3">
							<div class="courseTopAttr">
								<div class="row">
									<div class="col-xs-12 col-sm-6 voffset3">
										<h6 class="grayTxt text-uppercase"><small>Created by</small></h6>
										<h6 class="bold">Joseph Phillips, Amar Meena 3 more</h6>
									</div>
									<div class="col-xs-12 col-sm-6 voffset3">
										<h6 class="grayTxt text-uppercase"><small>Created on</small></h6>
										<h6 class="bold">Jan. 16, 2020</h6>
									</div>
									<div class="col-xs-12 col-sm-6 voffset3">
										<h6 class="grayTxt text-uppercase"><small>Students enrolled</small></h6>
										<h6 class="bold">141,068</h6>
									</div>
									<div class="col-xs-12 col-sm-6 voffset3">
										<h6 class="grayTxt text-uppercase"><small>Choose start date</small></h6>
										<div class="custmSelect noStyle">
											<select name="mentorList">
												<option value="30jul2020">30 Jul, 2020</option>
												<option value="1aug2020">1 Aug, 2020</option>
												<option value="20aug2020">20 Aug, 2020</option>
											</select>
										</div>
									</div>								
									<div class="col-xs-12 col-sm-6 voffset3">
										<h6 class="grayTxt text-uppercase"><small>Language in</small></h6>
										<h6 class="bold">Hindi, English</h6>
									</div>
									<div class="col-xs-12 col-sm-6 voffset3">
										<h6 class="grayTxt text-uppercase"><small>Ratings</small></h6>
										<h6 class="ratingWrap voffset1">
		                                    <span class="orangeTxt bold">4.8</span>
		                                    <ul class="starRatings">
		                                        <li class="active"></li>
		                                        <li class="active"></li>
		                                        <li class="active"></li>
		                                        <li class="active"></li>
		                                        <li></li>
		                                    </ul>
		                                    <small>(2,731 people)</small>
		                                </h6>
									</div>
									<div class="col-xs-12 col-sm-6 voffset3">
										<h6 class="grayTxt text-uppercase"><small>Course Duration</small></h6>
										<h6 class="bold">18 months</h6>
									</div>
									<div class="col-xs-12 col-sm-6 voffset3">
										<h6 class="grayTxt text-uppercase"><small>Course preview</small></h6>
										<button type="button" class="smallBtnLink greenTxt videoPopupLink">Watch Video</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12">				
				<div class="topAttrDisp">
					<h4 class="bold">Course included</h4>
					<div class="row">
						<div class="col-xs-6 col-sm-3 col-md-4 voffset3">
							<h6 class="">53.5 hours on-demand video</h6>
						</div>
						<div class="col-xs-6 col-sm-3 col-md-4 voffset3">
							<h6 class="">110 articles</h6>
						</div>
						<div class="col-xs-6 col-sm-3 col-md-4 voffset3">
							<h6 class="">19 downloadable resources</h6>
						</div>
						<div class="col-xs-6 col-sm-3 col-md-4 voffset3">
							<h6 class="">8 coding exercises</h6>
						</div>
						<div class="col-xs-6 col-sm-3 col-md-4 voffset3">
							<h6 class="">Full lifetime access</h6>
						</div>
						<div class="col-xs-6 col-sm-3 col-md-4 voffset3">
							<h6 class="">Access on mobile and TV</h6>
						</div>
						<div class="col-xs-6 col-sm-3 col-md-4 voffset3">
							<h6 class="">Assignments</h6>
						</div>
						<div class="col-xs-6 col-sm-3 col-md-4 voffset3">
							<h6 class="">Certificate of Completion</h6>
						</div>
					</div>
				</div>
			</div>			
			<div class="col-xs-12">
				<div class="topCourseBuyWrap basebg whiteTxt">
					<div class="row center-sm">
						<div class="col-xs-12 col-sm-3 voffset3">
							<h3 class="greenTxt bold"><i>₹</i>25,500</h3>
							<h6>
								<small>(Inclusive of all taxes)</small>
								<small class="strickOut"><i>₹</i>35,500</small>
								<small>33% off</small>
							</h6>
							<h6>
								<small class="redTxt">5 hours left at this price!</small>
							</h6>
						</div>
						<div class="col-xs-12 col-sm-3 voffset3">
							<h6 class="whiteTxt"><small>Do you have any coupon?</small></h6>
							<form name="applyCoupon" class="smallFormDisp voffset1" method="post">
								<div class="row">
									<div class="col-xs-8">
										<input type="text" name="coupon_code" class="form-control dashed" placeholder="Enter coupon code">
									</div>
									<div class="col-xs-4">
										<button type="button" class="smallBtnSubmit fullWidth black text-uppercase">Apply</button>
									</div>
								</div>
							</form>
						</div>
						<div class="col-xs-12 col-sm-3 voffset3">
							<div class="btnsWrap voffset2">
								<button type="button" class="btnLink fullWidth gradBg"><span>Buy now<i></i></span></button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="outcomeWrap">
					<h4 class="bold">Outcome</h4>
					<div class="row">
						<div class="col-xs-6 col-sm-3 col-md-4 voffset2">
							<h6 class=""><small>Be able to build ANY website you want.</small></h6>
						</div>
						<div class="col-xs-6 col-sm-3 col-md-4 voffset2">
							<h6 class=""><small>Craft a portfolio of websites to apply for junior developer jobs.</small></h6>
						</div>
						<div class="col-xs-6 col-sm-3 col-md-4 voffset2">
							<h6 class=""><small>Build fully-fledged websites and web apps for your startup or business.</small></h6>
						</div>
						<div class="col-xs-6 col-sm-3 col-md-4 voffset2">
							<h6 class=""><small>12+ Projects and Assignments</small></h6>
						</div>
						<div class="col-xs-6 col-sm-3 col-md-4 voffset2">
							<h6 class=""><small>Work as a freelance web developer.</small></h6>
						</div>
						<div class="col-xs-6 col-sm-3 col-md-4 voffset2">
							<h6 class=""><small>Master backend development with Node</small></h6>
						</div>
						<div class="col-xs-6 col-sm-3 col-md-4 voffset2">
							<h6 class=""><small>Learn professional developer best practices.</small></h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="stickyMain">
	<div class="stickyNavTop">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<ul class="scrollSpyTabNav inline">
						<li><a class="scrollSpyLink details_curriculum active" href="#details_curriculum">Curriculum</a></li>
						<li><a class="scrollSpyLink details_educator" href="#details_educator">Educator</a></li>
						<li><a class="scrollSpyLink details_overview" href="#details_overview">Overview</a></li>
						<li><a class="scrollSpyLink details_eligibility" href="#details_eligibility">Eligibility</a></li>
						<li><a class="scrollSpyLink details_fees" href="#details_fees">Fees</a></li>						
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="sntCntWrap">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<section class="scrollCntWrap" id="details_curriculum">
						<div class="row">
							<div class="col-xs-12">
								<h4 class="bold">Course Curriculum</h4>
								<p class="bold">What you'll cover in this course</p>
							</div>
							<div class="col-xs-12 voffset2">
								<h6 class="greenTxt">Download Syllabus</h6>
								<div class="btnsWrap voffset1">
									<button type="button" class="btnLink gradBg"><span>Download Now<i></i></span></button>
								</div>
							</div>							
						</div>
						<div class="row">
							<div class="col-xs-12 col-md-10 col-lg-8 voffset3">
								<div class="row middle-xs between-xs">
									<div class="col-xs-6 voffset3">
										<h4 class="bold">Course curriculum</h4>
									</div>
									<div class="col-xs-6 voffset3 text-right">
										<button type="button" class="expcolBtn expandAllItems">Expand all</button> &nbsp;&nbsp;&nbsp; 
										<button type="button" class="expcolBtn collapseAllItems">Collapse all</button>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 voffset3">
										<div class="ccwrapDisp">
											<article>
												<ul class="courseHeadWrap active">
													<li>Introduction</li>
													<li>4 videos, 6 quizzes</li>
													<li>42:30</li>
												</ul>
												<div class="ccDetailWrap active">
													<ul class="items">
														<li>Course overview</li>
													</ul>
													<ul class="items">
														<li>How to Get Started!</li>
													</ul>
													<ul class="items">
														<li>Assignments, Activities and Personalised Recommendations</li>
													</ul>
													<ul class="items">
														<li>Special Thanks and cknowledgements</li>
													</ul>
												</div>
											</article>
											<article>
												<ul class="courseHeadWrap">
													<li>Planning Online Learning + Online Learning Activities</li>
													<li>4 videos, 6 quizzes</li>
													<li>1:12:30</li>
												</ul>
												<div class="ccDetailWrap">
													<ul class="items">
														<li>Key Concept - Planning Online Learning</li>
													</ul>
													<ul class="items">
														<li>Using Online Environments for Teaching Large Classes</li>
													</ul>
													<ul class="items">
														<li>Teaching with Web 2.0 Technologies: Twitter, Wikis and Blogs</li>
													</ul>
													<ul class="items">
														<li>Teaching Using Scenario Based Simulations in Second Life</li>
													</ul>
												</div>
											</article>
											<article>
												<ul class="courseHeadWrap">
													<li>Planning Online Learning + Online Learning Activities</li>
													<li>4 videos, 6 quizzes</li>
													<li>1:12:30</li>
												</ul>
												<div class="ccDetailWrap">
													<ul class="items">
														<li>Key Concept - Planning Online Learning</li>
													</ul>
													<ul class="items">
														<li>Using Online Environments for Teaching Large Classes</li>
													</ul>
													<ul class="items">
														<li>Teaching with Web 2.0 Technologies: Twitter, Wikis and Blogs</li>
													</ul>
													<ul class="items">
														<li>Teaching Using Scenario Based Simulations in Second Life</li>
													</ul>
												</div>
											</article>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="scrollCntWrap" id="details_educator">
						<div class="row">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-12">
										<h4 class="bold">About Educator</h4>
										<p>Who designed and developed this course?</p>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-4 voffset3">
										<article class="mentorListItems">
											<a href="#">
												<img src="{{ asset('img/mentor1.jpg')}}" class="profileCircle" alt="">
												<h5 class="bold">Vanshika Jain</h5>
												<h6><small>Engineering Mathematics</small></h6>
												<h6><small>20 year of experience</small></h6>
												<h6 class="ratingWrap voffset1">
				                                    <span class="orangeTxt bold">4.8</span>
				                                    <ul class="starRatings">
				                                        <li class="active"></li>
				                                        <li class="active"></li>
				                                        <li class="active"></li>
				                                        <li class="active"></li>
				                                        <li></li>
				                                    </ul>
				                                    <small>(2,731 people)</small>
				                                </h6>
											</a>	
										</article>
									</div>
									<div class="col-xs-12 col-sm-4 voffset3">
										<article class="mentorListItems">
											<a href="#">
												<img src="{{ asset('img/mentor2.jpg')}}" class="profileCircle" alt="">
												<h5 class="bold">Vanshika Jain</h5>
												<h6><small>Engineering Mathematics</small></h6>
												<h6><small>20 year of experience</small></h6>
												<h6 class="ratingWrap">
				                                    <span class="orangeTxt bold">4.8</span>
				                                    <ul class="starRatings">
				                                        <li class="active"></li>
				                                        <li class="active"></li>
				                                        <li class="active"></li>
				                                        <li class="active"></li>
				                                        <li></li>
				                                    </ul>
				                                    <small>(2,731 people)</small>
				                                </h6>
											</a>	
										</article>
									</div>
									<div class="col-xs-12 col-sm-4 voffset3">
										<article class="mentorListItems">
											<a href="#">
												<img src="{{ asset('img/mentor3.jpg')}}" class="profileCircle" alt="">
												<h5 class="bold">Vanshika Jain</h5>
												<h6><small>Engineering Mathematics</small></h6>
												<h6><small>20 year of experience</small></h6>
												<h6 class="ratingWrap">
				                                    <span class="orangeTxt bold">4.8</span>
				                                    <ul class="starRatings">
				                                        <li class="active"></li>
				                                        <li class="active"></li>
				                                        <li class="active"></li>
				                                        <li class="active"></li>
				                                        <li></li>
				                                    </ul>
				                                    <small>(2,731 people)</small>
				                                </h6>
											</a>	
										</article>
									</div>
								</div>
							</div>
						</div>
					</section>	
					<section class="scrollCntWrap" id="details_overview">
						<div class="row">
							<div class="col-xs-12">
								<h4 class="bold">Course description</h4>
							</div>
							<div class="col-xs-12 col-md-8">
								<div class="contentPara voffset2">
									<p>This JEE Main 11 & 12th (Hindi + English) online course raises the academic levels of the student. High definition visualization techniques. Course prepared with NCERT and other preferred reference books, so this is the perfect study material one requires to ace the JEE Main. Also get online study materials, sample papers and previous exam papers and video solutions free. This course provides JEE Main syllabus and JEE Main pattern for engineering entrance exam.</p>
									<p>Our team of expert faculties are selected with good teaching skill, high qualification and experience. They are all expert in their subject and committed to the success of our students. We ensure to provide best results out of all level of students.</p>
								</div>
							</div>
						</div>					
					</section>
					<section class="scrollCntWrap" id="details_eligibility">
						<div class="row">
							<div class="col-xs-12">
								<h4 class="bold">What you need?</h4>
								<ul class="checkMark green">
									<li>Basic javascript knowledge - this course teaches data structures from the ground up</li>
									<li>Internet Connection</li>
									<li>Min. bandwidth requirement of 512 Kbps</li>
									<li>Desktop/Laptop/Mobile</li>
									<li>Earphones</li>
								</ul>
							</div>
						</div>
					</section>									
					<section class="scrollCntWrap" id="details_fees">
						<div class="row">
							<div class="col-xs-12">
								<h4 class="bold">Choose a start date</h4>
									<ul class="radioList inline">
									<li>
										<div class="cstmRadio">
											<input type="radio" name="course_sort" value="30jul2020" id="30jul2020" checked>
											<label for="30jul2020">30 Jul, 2020</label>
										</div>
									</li>
									<li>
										<div class="cstmRadio">
											<input type="radio" name="course_sort" value="1aug2020" id="1aug2020">
											<label for="1aug2020">1 Aug, 2020</label>
										</div>
									</li>
									<li>
										<div class="cstmRadio">
											<input type="radio" name="course_sort" value="20aug2020" id="20aug2020">
											<label for="20aug2020">20 Aug, 2020</label>
										</div>
									</li>
								</ul>
							</div>
							<div class="col-xs-12 voffset2">
								<h4 class="greenTxt bold"><i>₹</i>25,500</h4>
								<h6>
									<small>(Inclusive of all taxes)</small>
									<small class="strickOut"><i>₹</i>35,500</small>
									<small>33% off</small>
								</h6>							
							</div>
							<div class="col-xs-12">
								<button type="button" class="smallBtnLink showHideLink">Do you have any coupon?</button>
								<form name="applyCoupon" class="smallFormDisp showHideContent hideMe" method="post">
									<div class="row">
										<div class="col-xs-12 col-md-4">
											<div class="row">
												<div class="col-xs-8">
													<input type="text" name="coupon_code" class="form-control dashed" placeholder="Enter coupon code">
												</div>
												<div class="col-xs-4">
													<button type="button" class="smallBtnSubmit fullWidth base text-uppercase">Apply</button>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="col-xs-12 voffset2">
								<div class="btnsWrap">
									<button type="button" class="btnLink gradBg"><span>Buy now<i></i></span></button>
								</div>
							</div>
							<div class="col-xs-12">
								<h6>
									<small>*30-Day Money-Back Guarantee</small>
								</h6>
							</div>
						</div>
					</section>					
				</div>
			</div>
		</div>
	</div>
</div>
<section class="whitebg">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h3>Related Courses</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-3 voffset3">
				<article class="courseListItem">
                    <a href="#" target="_blank" tabindex="0">
                        <div class="imgZoomWrap">
                            <img src="http://localhost/adhyapak/img/courseThumb01.jpg" class="img-fluidThumb" alt="">
                        </div>
                    </a>
                    <div class="courseBtmWrap">
                        <ul class="courseLang">
                            <li>English</li>
                            <li>Hindi</li>
                        </ul>
                        <h4>Become a Product Manager</h4>
                        <h6><small>Personal Development</small></h6>
                        <h6><small>By Atul Verma</small></h6>
                        <ul class="courseAttr">
                            <li>
                                <h6><small>Start date</small></h6>
                                <h6>Jul 15, 2020</h6>
                            </li>
                            <li>
                                <h6><small>Duration</small></h6>
                                <h6>3 months</h6>
                            </li>
                        </ul>
                        <h6 class="ratingWrap">
                            <span class="orangeTxt bold">4.8</span>
                            <ul class="starRatings">
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li></li>
                            </ul>
                            <small>(2,731 people)</small>
                        </h6>
                        <ul class="bottomLinks">
                            <h5 class="priceInfo">
                                <span class="newPrice"><i>₹</i>700</span>
                                <span class="realPrice"><i>₹</i>700</span>
                            </h5>
                            <a href="#" class="arrowBtn" tabindex="0">View course</a>
                        </ul>
                    </div>
                </article>
			</div>
			<div class="col-xs-12 col-md-3 voffset3">
				<article class="courseListItem">
                    <a href="#" target="_blank" tabindex="0">
                        <div class="imgZoomWrap">
                            <img src="http://localhost/adhyapak/img/courseThumb01.jpg" class="img-fluidThumb" alt="">
                        </div>
                    </a>
                    <div class="courseBtmWrap">
                        <ul class="courseLang">
                            <li>English</li>
                            <li>Hindi</li>
                        </ul>
                        <h4>Become a Product Manager</h4>
                        <h6><small>Personal Development</small></h6>
                        <h6><small>By Atul Verma</small></h6>
                        <ul class="courseAttr">
                            <li>
                                <h6><small>Start date</small></h6>
                                <h6>Jul 15, 2020</h6>
                            </li>
                            <li>
                                <h6><small>Duration</small></h6>
                                <h6>3 months</h6>
                            </li>
                        </ul>
                        <h6 class="ratingWrap">
                            <span class="orangeTxt bold">4.8</span>
                            <ul class="starRatings">
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li></li>
                            </ul>
                            <small>(2,731 people)</small>
                        </h6>
                        <ul class="bottomLinks">
                            <h5 class="priceInfo">
                                <span class="newPrice"><i>₹</i>700</span>
                                <span class="realPrice"><i>₹</i>700</span>
                            </h5>
                            <a href="#" class="arrowBtn" tabindex="0">View course</a>
                        </ul>
                    </div>
                </article>
			</div>
			<div class="col-xs-12 col-md-3 voffset3">
				<article class="courseListItem">
                    <a href="#" target="_blank" tabindex="0">
                        <div class="imgZoomWrap">
                            <img src="http://localhost/adhyapak/img/courseThumb01.jpg" class="img-fluidThumb" alt="">
                        </div>
                    </a>
                    <div class="courseBtmWrap">
                        <ul class="courseLang">
                            <li>English</li>
                            <li>Hindi</li>
                        </ul>
                        <h4>Become a Product Manager</h4>
                        <h6><small>Personal Development</small></h6>
                        <h6><small>By Atul Verma</small></h6>
                        <ul class="courseAttr">
                            <li>
                                <h6><small>Start date</small></h6>
                                <h6>Jul 15, 2020</h6>
                            </li>
                            <li>
                                <h6><small>Duration</small></h6>
                                <h6>3 months</h6>
                            </li>
                        </ul>
                        <h6 class="ratingWrap">
                            <span class="orangeTxt bold">4.8</span>
                            <ul class="starRatings">
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li></li>
                            </ul>
                            <small>(2,731 people)</small>
                        </h6>
                        <ul class="bottomLinks">
                            <h5 class="priceInfo">
                                <span class="newPrice"><i>₹</i>700</span>
                                <span class="realPrice"><i>₹</i>700</span>
                            </h5>
                            <a href="#" class="arrowBtn" tabindex="0">View course</a>
                        </ul>
                    </div>
                </article>
			</div>
			<div class="col-xs-12 col-md-3 voffset3">
				<article class="courseListItem">
                    <a href="#" target="_blank" tabindex="0">
                        <div class="imgZoomWrap">
                            <img src="http://localhost/adhyapak/img/courseThumb01.jpg" class="img-fluidThumb" alt="">
                        </div>
                    </a>
                    <div class="courseBtmWrap">
                        <ul class="courseLang">
                            <li>English</li>
                            <li>Hindi</li>
                        </ul>
                        <h4>Become a Product Manager</h4>
                        <h6><small>Personal Development</small></h6>
                        <h6><small>By Atul Verma</small></h6>
                        <ul class="courseAttr">
                            <li>
                                <h6><small>Start date</small></h6>
                                <h6>Jul 15, 2020</h6>
                            </li>
                            <li>
                                <h6><small>Duration</small></h6>
                                <h6>3 months</h6>
                            </li>
                        </ul>
                        <h6 class="ratingWrap">
                            <span class="orangeTxt bold">4.8</span>
                            <ul class="starRatings">
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li></li>
                            </ul>
                            <small>(2,731 people)</small>
                        </h6>
                        <ul class="bottomLinks">
                            <h5 class="priceInfo">
                                <span class="newPrice"><i>₹</i>700</span>
                                <span class="realPrice"><i>₹</i>700</span>
                            </h5>
                            <a href="#" class="arrowBtn" tabindex="0">View course</a>
                        </ul>
                    </div>
                </article>
			</div>
		</div>
	</div>
</section>
<section class="silverBg">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h6 class="bold text-uppercase"><small>Testimonials</small></h6>
				<h3>Course Reviews</h3>
				<h6>What students say about us</h6>
			</div>
			<div class="col-xs-12 voffset2">
                <div class="slickSwipe col3Swipe testimonialList">
                    <article>
                        <img src="{{asset('img/krutika-bupendar.jpg')}}" class="profileCircle" align="">
                        <div class="infoWrap">
                            <h6 class="">krutika bupendar</h6>
                            <h6 class="grayTxt"><small>MBA Program, 2019</small> | <small>New Delhi</small></h6>
                            <h6 class="grayTxt"><small>Student</small></h6>
                        </div>
                        <blockquote>
                            It’s a really big deal to offer an online MBA that’s a real MBA at a price that’s achievable. This program is totally disrupting higher education.
                        </blockquote>
                        <div class="infoBtmWrap">                            
                            <ul class="starRatings">   
                                <span class="orangeTxt bold">4.8</span>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li></li>
                            </ul>
                            <small class="timeDisp">30 min ago</small>
                        </div>
                    </article>
                    <article>
                        <img src="{{asset('img/PranjalDubey.jpg')}}" class="profileCircle" align="">
                        <div class="infoWrap">
                            <h6 class="">Pranjal Dubey</h6>
                            <h6 class="grayTxt"><small>MBA Program, 2019</small> | <small>New Delhi</small></h6>
                            <h6 class="grayTxt"><small>Student</small></h6>
                        </div>
                        <blockquote>
                            It’s a really big deal to offer an online MBA that’s a real MBA at a price that’s achievable. This program is totally disrupting higher education.
                        </blockquote>
                        <div class="infoBtmWrap">                            
                            <ul class="starRatings">   
                                <span class="orangeTxt bold">4.8</span>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li></li>
                            </ul>
                            <small class="timeDisp">30 min ago</small>
                        </div>
                    </article>
                    <article>
                        <img src="{{asset('img/nikita-appaswami.jpg')}}" class="profileCircle" align="">
                        <div class="infoWrap">
                            <h6 class="">nikita appaswami</h6>
                            <h6 class="grayTxt"><small>IAS, 2019</small> | <small>New Delhi</small></h6>
                            <h6 class="grayTxt"><small>Student</small></h6>
                        </div>
                        <blockquote>
                            It’s a really big deal to offer an online MBA that’s a real MBA at a price that’s achievable. This program is totally disrupting higher education.
                        </blockquote>
                        <div class="infoBtmWrap">                            
                            <ul class="starRatings">   
                                <span class="orangeTxt bold">4.8</span>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li></li>
                            </ul>
                            <small class="timeDisp">30 min ago</small>
                        </div>
                    </article>
                    <article>
                        <img src="{{asset('img/chan.jpg')}}" class="profileCircle" align="">
                        <div class="infoWrap">
                            <h6 class="">Chanan</h6>
                            <h6 class="grayTxt"><small>MBA Program, 2019</small> | <small>New Delhi</small></h6>
                            <h6 class="grayTxt"><small>Student</small></h6>
                        </div>
                        <blockquote>
                            It’s a really big deal to offer an online MBA that’s a real MBA at a price that’s achievable. This program is totally disrupting higher education.
                        </blockquote>
                        <div class="infoBtmWrap">                            
                            <ul class="starRatings">   
                                <span class="orangeTxt bold">4.8</span>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li></li>
                            </ul>
                            <small class="timeDisp">30 min ago</small>
                        </div>
                    </article>
                    <article>
                        <img src="{{asset('img/raman-bhargav.jpg')}}" class="profileCircle" align="">
                        <div class="infoWrap">
                            <h6 class="">raman bhargav</h6>
                            <h6 class="grayTxt"><small>MBA Program, 2019</small> | <small>New Delhi</small></h6>
                            <h6 class="grayTxt"><small>Student</small></h6>
                        </div>
                        <blockquote>
                            It’s a really big deal to offer an online MBA that’s a real MBA at a price that’s achievable. This program is totally disrupting higher education.
                        </blockquote>
                        <div class="infoBtmWrap">                            
                            <ul class="starRatings">   
                                <span class="orangeTxt bold">4.8</span>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li></li>
                            </ul>
                            <small class="timeDisp">30 min ago</small>
                        </div>
                    </article>
                    <article>
                        <img src="{{asset('img/vikas-kumar.jpg')}}" class="profileCircle" align="">
                        <div class="infoWrap">
                            <h6 class="">vikas-kumar</h6>
                            <h6 class="grayTxt"><small>Law expert</small> | <small>New Delhi</small></h6>
                            <h6 class="grayTxt"><small>Student</small></h6>
                        </div>
                        <blockquote>
                            It’s a really big deal to offer an online MBA that’s a real MBA at a price that’s achievable. This program is totally disrupting higher education.
                        </blockquote>
                        <div class="infoBtmWrap">                            
                            <ul class="starRatings">   
                                <span class="orangeTxt bold">4.8</span>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li></li>
                            </ul>
                            <small class="timeDisp">30 min ago</small>
                        </div>
                    </article>
                </div>
            </div>
			<div class="col-xs-12">
				<ul class="groupButtonSet green">
                    <li><a href="http://localhost/adhyapak/register">View all testimonials</a></li>
                    <li><a href="http://localhost/adhyapak/login">Add your testimonial</a></li>
                </ul>
			</div>
		</div>
	</div>
</section>
<section class="">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h6 class="bold text-uppercase"><small>FAQs</small></h6>
				<h3>Common Questions</h3>
				<h6>Asked by students</h6>
			</div>
			<div class="col-xs-12 col-md-10 col-lg-8 voffset2">
				<ul class="faqsItemDisp">
					<li>
						<div class="questionHead active">How do I register?</div>
						<div class="answerCntWrap active">
							<p>Click on <a href="#">Sign Up</a> button on the top-right corner of the page and login using your facebook or google account. Or better, create your own NeoStencil account! A confirmation message “Check Your Email To Activate Your Account!” will flash on your screen. Check your inbox and click on the link in the mail. Done? Welcome aboard!</p>
						</div>
					</li>
					<li>
						<div class="questionHead">What are the payments options available? Also tell me about EMI and Bank Deposits.</div>
						<div class="answerCntWrap">
							<ul>
								<li>There are payment options available to you as below?</li>
								<li>Credit/ Debit Card</li>
								<li>Net Banking</li>
								<li>Cash/ Cheque deposit in Bank</li>
								<li>Wallet Payment.</li>
								<li>Cash Cards</li>
								<li>Mobile Payment</li>
							</ul>
						</div>
					</li>
					<li>
						<div class="questionHead">Can I use different Billing and Shipping Address?</div>
						<div class="answerCntWrap">
							<p>Yes, you can use your any Billing Address and provide different Shipping Address where the product is to be delivered.</p>
						</div>
					</li>
					<li>
						<div class="questionHead">What is Free Trial?</div>
						<div class="answerCntWrap">
							<p>Free Trial is like a Demo Lecture available in Courses. It is provided to students to check the Lecture Quality, Teaching Style of Faculty etc. so that students will be satisfied after they purchase the course.</p>
						</div>
					</li>
					<li>
						<div class="questionHead">Is there any compulsion to purchase after using Free Trial?</div>
						<div class="answerCntWrap">
							<p>No, there is no compulsion, you can use Free Trial without any purchase condition.</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-xs-12 voffset4">
				<ul class="groupButtonSet green">
                    <li><a href="#">View all FAQs</a></li>
                    <li><a href="#">Ask your question</a></li>
                </ul>
			</div>
		</div>
	</div>
</section>
<div class="fullModelWrap">	
	<div class="modelVideoContent">
		<div class="modelHead">
			<h4>Course Preview The Complete 2020 Web Development B</h4>
			<span class="closeTime videoClose">X close</span>
		</div>
		<div class="modelBody">
			<video controls>
			    <source type="video/mp4" 
			    src="http://player.vimeo.com/external/85569724.sd.mp4?s=43df5df0d733011263687d20a47557e4">
			</video>
		</div>
	</div>
</div>
@endsection

