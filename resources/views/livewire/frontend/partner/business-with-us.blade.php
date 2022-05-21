<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="pageHeading">Make an impact on extreme global poverty</h1>
				<h4><span class="greenTxt">become a business partner with us</span></h4>
			</div>
			<div class="col-xs-12 col-md-8 voffset4">
				<h5 class="normal grayTxt">
					Being a partner comes with amazing economic benefits. By teaming up with us, we commit to providing you with everything you need to acquire new customers. In return, you will be given the unique opportunity to increase your profits by selling books.
				</h5>
			</div>
             
			<div class="col-xs-12 col-sm-8 col-md-5 voffset4">
                <div class="text-center">
                     @if (session()->has('message'))
                        <div class="alert alert-primary">
                            {!! session('message') !!}
                        </div>
                    @endif
                  </div>
				<form class="validateForm" id="businessform" wire:submit.prevent="saveBusinessWithUsRequest">
					<div class="row">
						<div class="col-xs-12 voffset2">
                            <label class="lblHead" for="business_name">full name</label>
                            <input type="text"  wire:model="full_name" id="business_name" class="form-control" placeholder="* Full name" name="display_name">
                             @error('full_name') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="col-xs-12 voffset2">
                            <label class="lblHead" for="business_email">email address</label>
                            <input type="email" wire:model="email" id="business_email" placeholder="* Email address" class="form-control" name="email">
                             @error('email') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="col-xs-12 voffset2">
                            <label class="lblHead" for="business_mobile">mobile number</label>
                            <input type="text" wire:model="mobile" id="business_mobile" placeholder="* Mobile number" class="form-control numberOnly" maxlength="15" name="mobile_number">
                            @error('mobile') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="col-xs-12 voffset2">
                            <label class="lblHead" for="business_company">company name</label>
                            <input type="text" wire:model="company_name" id="business_company" placeholder="* Company name" class="form-control" name="business_company" required>
                              @error('company_name') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="col-xs-12 voffset2">
                            <label class="lblHead" for="business_city">City name</label>
                            <input type="text" wire:model="city_name" id="business_city" placeholder="* City" class="form-control" name="business_city" required>
                              @error('city_name') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="col-xs-12 voffset2">
                            <label class="lblHead" for="business_message">City name</label>
                            <textarea class="form-control" wire:model="message" placeholder="Type your message" id="business_message" name="business_message"></textarea>
                            @error('message') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
						<div class="col-xs-12 voffset3">
                        	<p><small>By clicking Apply now button, you agree to our <a href="{{ URL::to('/terms-and-condition') }}" class="greenTxt underline">Term & Condition</a>, <a href="{{ URL::to('/privacy-policy') }}" class="greenTxt underline">Privacy Policy</a> and <a href="{{ URL::to('/cookies-policies') }}" class="greenTxt underline">Cookie Policy</a>.</small></p>
                        </div>
					</div>
					<div class="row">
						<div class="col-xs-12 voffset2">
                           <button type="submit" class="formBtn submitFormBtn fullWidth darkBg" id="subscribe_submit">Apply now ></button>
                        </div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
