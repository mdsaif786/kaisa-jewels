<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="pageHeading">Sign In</h1>
				<h6>Welcome back! Please login to your account.</h6>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-5 voffset3">
				<form class="validateForm" id="loginForm" action="" method="POST">
					<div class="row">
                        <div class="col-xs-12 voffset2">
                            <label class="lblHead" for="login_email"></label>
                            <input type="email" id="login_email" placeholder="* Email address" class="form-control" name="email">
                        </div>
                        <div class="col-xs-12 voffset2">
                            <label class="lblHead" for="login_password"></label>
                            <input type="password" id="login_password" placeholder="* Password" class="form-control numberOnly" maxlength="15" name="password">
                        </div>
					</div>
					<div class="row">
						<div class="col-xs-12 voffset3">
							<button type="button" class="formBtn submitFormBtn fullWidth darkBg" id="login_submit">Login</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 voffset2">
				<a href="{{ URL::to('/forgot-password') }}" class="greenTxt bold">Forgot your password?</a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 voffset4">
				<h6>Don't have an account?</h6>
				<div class="listButton voffset2">
					<a href="{{ URL::to('/register') }}" class="linkBtn white">Create account</a>
				</div>
			</div>
		</div>
	</div>
</section>