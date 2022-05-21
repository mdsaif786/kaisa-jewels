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
								<input type="radio" id="faq_all" value="" name="faq_categories" checked>
								<label for="cat_all" class="blogCatList">All</label>
							</li>
								<li>
								<input type="radio" id="faq_student" value="student" name="faq_categories">
								<label for="faq_student" class="blogCatList">Student</label>
							</li>
							<li>
								<input type="radio" id="faq_Instructor" value="instructor" name="faq_categories">
								<label for="faq_Instructor" class="blogCatList">Instructor</label>
							</li>
							<li>
								<input type="radio" id="faq_partner" value="partner" name="faq_categories">
								<label for="faq_partner" class="blogCatList">Partner</label>
							</li>
							<li>
								<input type="radio" id="cat_anonymous" value="anonymous" name="faq_categories">
								<label for="cat_anonymous" class="blogCatList">Anonymous</label>
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
					<div class="col-xs-12">
						<label>How may we help you?</label>
						<input type="search" name="search_faq" class="form-control" placeholder="Type your question here...">
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 voffset3">
						<div class="gridMasonry">
							<article>
								<div class="content">
									<h5 class="post-title">What is the Online Adhyapak Program?</h5>		                            
		                            <p>The Online Adhyapak Program is an initiative of in which live classes are conducted online. Both learn and revision sessions for Class 6 to 10 students of CBSE schools are being conducted through this program. The platform allows students to register and benefit from these live teacher-led sessions on topics/ hard-spots in Science, Mathematics, English and Social Science followed by doubt clarification.</p>
		                            <h6 class="greenTxt"><small>Raman Arora, Student</small></h6>
								</div>
							</article>
							<article>
								<div class="content">
		                            <h5 class="post-title">Can I attend Online Adhyapak Live Sessions without subscribing to the Online Adhyapak learning platform? Are there any hidden charges for Live Registration?</h5>
		                            <p>
									No. Students can access Online Adhyapak Live Sessions by registering into the learning platform. Students can register for Live Sessions at free of cost and there are no hidden charges applicable.</p>
									<h6 class="greenTxt"><small>Suchi Bhargav, Student</small></h6>
								</div>
							</article>
							<article>
								<div class="content">
		                            <h5 class="post-title">Does Online Adhyapak offer any financial aid to economically weaker students?</h5>
		                            <p>
									Online Adhyapak always supports the meritorious students who want to take guidance from the subject experts at the organization. Online Adhyapak offers students financial aid in the form of scholarships. The set of examinations includes Aakash National Talent Hunt, All India Aakash Test Series (AIATS), and Admission cum Scholarship Test (ACST). AIATS is the flagship test series conducted by the Aakash Institute. The results of the exam will determine the final scholarship amount for the respective student who has attempted the scholarship examination of Aakash Institute.</p>
									<h6 class="greenTxt"><small>Arshad Varsi, Student</small></h6>
								</div>
							</article>
							<article>
								<div class="content">
		                            <h5 class="post-title">How skilled are the teachers teaching the courses and what is their schedule of availability for the students who need more guidance?</h5>
		                            <p>
									All of the courses of Online Adhyapak are designed under the expertise of the top subject experts. The “Doubt Resolution Helpline” and “Ask an Expert” have been introduced for helping students who are not in touch with physical classroom facilities during their exam preparation. Students get all their doubts cleared immediately on the available mode.</p>
									<h6 class="greenTxt"><small>Suchi Bhargav, Student</small></h6>
								</div>
							</article>
							<article>
								<div class="content">
		                            <h5 class="post-title">Promote Your Course With Coupons and Referral Links</h5>
		                            <p>
									Creating coupons and referring students is an important part of any instructor's promotional strategy. When students use your coupon or referral link to enroll in your course, you will receive 97% of the revenue share.</p>
									<h6 class="greenTxt"><small>Dr MC verma, Educator</small></h6>
								</div>
							</article>
							<article>
								<div class="content">
		                            <h5 class="post-title">Where can I access this Course?</h5>
		                            <p>
									Once you have made the purchase, you simply need to ensure that you are logged in. If you see a “Log In” in the top right corner, it means you need to sign in with your registered account details. Once you are logged in, click on “My Account/ My Courses” in the side menu. Under this section you will see “Class 10th Crash Course”. Click on it to go to the Course Page. You can click on "Course Details" to access your past, current and upcoming classes and modules.</p>
									<h6 class="greenTxt"><small>Umesh Rai, Educator</small></h6>
								</div>
							</article>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="whitebg">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h3>Didn't find your answer above ?</h3>
						<h6>Ask a question</h6>
					</div>
					<div class="col-xs-12">
						<form name="ask_question" method="POST" class="validateForm">
							<div class="row">
								<div class="col-xs-12 col-sm-4 voffset2">
									<input type="text" name="fullname" class="form-control" placeholder="Full name" required>
								</div>
								<div class="col-xs-12 col-sm-4 voffset2">
									<input type="email" name="email" class="form-control" placeholder="Email address" required>
								</div>
								<div class="col-xs-12 col-sm-4 voffset2">
									<input type="text" name="mobile" class="form-control numberOnly" placeholder="Mobile number" required>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-6 voffset2">
									<div class="custmSelect fullSqr">
										<select name="user_role" >
											<option value="">Select your role</option>
											<option value="">Student</option>
											<option value="">Teacher</option>
											<option value="">Partner</option>
											<option value="">Anonymous</option>
										</select>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 voffset2">
									<div class="custmSelect fullSqr">
										<select name="faq_type" >
											<option value="">Select your question type</option>
											<option value="">General inquiries</option>
											<option value="">Getting started</option>
											<option value="">Account/Profile</option>
											<option value="">Troubleshooting</option>
											<option value="">Purchase</option>
											<option value="">Refund</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-4 voffset2">
									<button type="button" class="btnLink gradBg submitFormBtn fullWidth" id="ask_question_submit"><span>Submit your question <i></i></span> </button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="row voffset4">
					<div class="col-xs-12">
						<h6>If you have any more queries, you can also mail us at <a href="mailto:support@onlineadhyapak.com" class="greenTxt underline">support@onlineadhyapak.com</a> and we will get back to you!</h6>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>