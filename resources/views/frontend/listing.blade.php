@extends('layouts.master')
@section('content')
<div class="stickyMain">
	<div class="stickyNavTop">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="scrollTabs">
						<ul class="listingFilterTab">
							<li>Filter By</li>
							<li><span dataFilter="filter_categories">Categories</span></li>
							<li><span dataFilter="filter_exam">Exam</span></li>
							<li><span dataFilter="filter_educator">Educator</span></li>
							<li><span dataFilter="filter_language">Language</span></li>
							<li><span dataFilter="filter_skill_lavel">Skill Lavel</span></li>
							<li><span dataFilter="filter_sort_by">Sort By</span></li>
						</ul>
						<div class="listingFilterWrap">
							<span class="closeTime base" id="closeFilterBar">X close</span>
							<div class="filterContentDisp" id="show_filter_categories">
								<ul class="flex4col">
									<li>
										<label for="catetory_cate01" class="inCheck">Child category 01
											<input type="checkbox" name="catetory_cate01" id="catetory_cate01"><span class="checkme"></span>
										</label>
									</li>
									<li>
										<label for="catetory_cate02" class="inCheck">Child category 02
											<input type="checkbox" name="catetory_cate02" id="catetory_cate02"><span class="checkme"></span>
										</label>
									</li>
									<li>
										<label for="catetory_cate03" class="inCheck">Child category 03
											<input type="checkbox" name="catetory_cate03" id="catetory_cate03"><span class="checkme"></span>
										</label>
									</li>
									<li>
										<label for="catetory_cate04" class="inCheck">Child category 04
											<input type="checkbox" name="catetory_cate04" id="catetory_cate04"><span class="checkme"></span>
										</label>
									</li>
									<li>
										<label for="catetory_cate05" class="inCheck">Child category 05
											<input type="checkbox" name="catetory_cate05" id="catetory_cate05"><span class="checkme"></span>
										</label>
									</li>
									<li>
										<label for="catetory_cate06" class="inCheck">Child category 06
											<input type="checkbox" name="catetory_cate06" id="catetory_cate06"><span class="checkme"></span>
										</label>
									</li>
									<li>
										<label for="catetory_cate07" class="inCheck">Child category 07
											<input type="checkbox" name="catetory_cate07" id="catetory_cate07"><span class="checkme"></span>
										</label>
									</li>
								</ul>
							</div>
							<div class="filterContentDisp" id="show_filter_educator">
								<ul class="flex4col">
									<li>
										<label for="educator_ramanarora" class="inCheck">Pro. Raman Arora
											<input type="checkbox" name="educator_ramanarora" id="educator_ramanarora"><span class="checkme"></span>
										</label>
									</li>
									<li>
										<label for="educator_aditya_sukla" class="inCheck">Pro. Aditya sukla
											<input type="checkbox" name="educator_ramanarora" id="educator_aditya_sukla"><span class="checkme"></span>
										</label>
									</li>
									<li>
										<label for="educator_jatin_bhanot" class="inCheck">Dr. Jatin Bhanot
											<input type="checkbox" name="educator_ramanarora" id="educator_jatin_bhanot"><span class="checkme"></span>
										</label>
									</li>
								</ul>
							</div>
							<div class="filterContentDisp" id="show_filter_sort_by">
								<ul class="flex4col">
									<li>
										<label for="sort_most_popular" class="inRadio">Most popular
										<input type="radio" name="sortbyfilter" id="sort_most_popular" value="most_popular"><span class="checkRadio"></span>
										</label>
									</li>
									<li>
										<label for="sort_upcoming" class="inRadio">Upcoming
										<input type="radio" name="sortbyfilter" id="sort_upcoming" value="upcoming"><span class="checkRadio"></span></label>
									</li>
									<li>
										<label for="sort_course_duration" class="inRadio">Course duration
										<input type="radio" name="sortbyfilter" id="sort_course_duration" value="course_duration"><span class="checkRadio"></span></label>
									</li>
									<li>
										<label for="sort_price_lowest" class="inRadio">Price: Low to high
										<input type="radio" name="sortbyfilter" id="sort_price_lowest" value="price_lowest"><span class="checkRadio"></span></label>
									</li>
									<li>
										<label for="sort_price_highest" class="inRadio">Price: Hight to low
										<input type="radio" name="sortbyfilter" id="sort_price_highest" value="price_highest"><span class="checkRadio"></span></label>
									</li>
									<li>
										<label for="sort_newest" class="inRadio">Newest
										<input type="radio" name="sortbyfilter" id="sort_newest" value="newest"><span class="checkRadio"></span></label>
									</li>
									<li>
										<label for="sort_oldest" class="inRadio">Oldest
										<input type="radio" name="sortbyfilter" id="sort_oldest" value="oldest"><span class="checkRadio"></span></label>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="sntCntWrap">
		<section class="half">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 voffset2">
						<ol class="breadcrumb">
						  <li><a href="#">Programs</a></li>
						  <li><a href="#">Acadmic</a></li>
						</ol>
					</div>
					<div class="col-xs-12">
						<h6 class="pageSubHeading bold">Computer Science</h6>
						<h6><small>2834 courses</small></h6>
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
		<section class="half">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						pagination part
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
@endsection