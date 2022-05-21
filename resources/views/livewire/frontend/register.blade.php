<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="pageHeading">Sign Up</h1>
				<h6><span class="greenTxt">No credit required</span>, It's free and take less than 60 seconds.</h6>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-5 voffset3">
				<form class="validateForm" id="signupForm" action="" method="POST">
					<div class="row">
						<div class="col-xs-12 voffset2">
                            <label class="lblHead" for="signup_name"></label>
                            <input type="text" id="signup_name" class="form-control" placeholder="* Full name" name="display_name">
                        </div>
                        <div class="col-xs-12 voffset2">
                            <label class="lblHead" for="signup_email"></label>
                            <input type="email" id="signup_email" placeholder="* Email address" class="form-control" name="email">
                        </div>
                        <div class="col-xs-12 voffset2">
                            <label class="lblHead" for="signup_mobile"></label>
                            <input type="text" id="signup_mobile" placeholder="* Mobile number" class="form-control numberOnly" maxlength="15" name="mobile_number">
                        </div>
                        <div class="col-xs-12 voffset2">
                            <label class="lblHead" for="signup_password"></label>
                            <input type="password" id="signup_password" placeholder="* Password" class="form-control numberOnly" maxlength="15" name="password">
                        </div>
                        <div class="col-xs-12 voffset3">
                        	<p><small>By clicking Create Account button, you agree to our <a href="{{ URL::to('/terms') }}" class="greenTxt underline">Terms</a>, <a href="{{ URL::to('/data-policy') }}" class="greenTxt underline">Data Policy</a> and <a href="{{ URL::to('/cookies-policies') }}" class="greenTxt underline">Cookie Policy</a>.</small></p>
                        </div>
					</div>
					<div class="row">
						<div class="col-xs-12 voffset3">
							<button type="button" class="formBtn submitFormBtn fullWidth darkBg" id="signup_submit">Create account ></button>
						</div>
					</div>					
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 voffset4">
				<h6>Already have an account?</h6>
				<div class="listButton voffset2">
					<a href="{{ URL::to('/login') }}" class="linkBtn white">Login here</a>
				</div>
			</div>
		</div>
	</div>
</section>
