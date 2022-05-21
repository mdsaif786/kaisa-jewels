<section class="silverBg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6">
                <h1 class="pageHeading">Don't be a stranger</h1>
                <h3 class="greenTxt">Just say hello.</h3>
                <h6 class="grayTxt voffset2">Whether you have a question about features,or anything else, our team is ready to answer all your questions</h6>
            </div>
        </div>
        <div class="row between-sm voffset4">
        	<div class="col-xs-12 col-sm-5">
        		<div class="row">
        			<div class="col-xs-12 voffset4">
        				<h6><small class="text-uppercase greenTxt">How to reach us</small></h6>
        				<h4><a href="tel:+919953733008" class="bold">+91 99537 33008</a></h4>
        				<h4 class="voffset2"><a href="mailto:support@sthula.com" class="bold">support@sthula.com</a></h4>
        			</div>
        			<div class="col-xs-12 voffset4">
        				<h6><small class="text-uppercase greenTxt">How to reach us</small></h6>
        				<address>
        					Address line goes here<br>
        					New Delhi -  110007 India
        				</address>
        			</div>
        		</div>
        	</div>
        	<div class="col-xs-12 col-sm-6 voffset4">
        		<div class="row">
        			<div class="col-xs-12">
        				<h3 class="normal">Contact Us</h3>
        				<h6 class="grayTxt">Our beloved team will answer you as soon as possible</h6>
        			</div>
                    <div class="text-center">
                     @if (session()->has('message'))
                        <div class="alert alert-primary">
                            {!! session('message') !!}
                        </div>
                    @endif
                  </div>

        			<div class="col-xs-12 voffset3">
        				<form class="validateForm" id="" wire:submit.prevent="saveContactUsRequest">
        					<div class="row">
        						<div class="col-xs-12 voffset2">
        							<input type="text" wire:model="full_name" name="display_name" class="form-control" placeholder="Full name">
                                    @error('full_name') <span class="text-danger">{{$message}}</span> @enderror
        						</div>
        						<div class="col-xs-12 voffset2">
        							<input type="email" wire:model="email" name="email" class="form-control" placeholder="Email address">
                                    @error('email') <span class="text-danger">{{$message}}</span> @enderror
        						</div>
        						<div class="col-xs-12 voffset2">
        							<input type="text" wire:model="mobile" name="mobile_number" class="form-control numberOnly" placeholder="Mobile number">
                                    @error('mobile') <span class="text-danger">{{$message}}</span> @enderror
        						</div>
        						<div class="col-xs-12 voffset2">
        							<textarea wire:model="message" class="form-control" placeholder="type your message"></textarea>
                                    @error('message') <span class="text-danger">{{$message}}</span> @enderror
        						</div>
        					</div>
        					<div class="row">
        						<div class="col-xs-12 col-md-4 voffset2">
        							<button type="submit" class="formBtn submitFormBtn fullWidth darkBg" id="">Send Now</button>
        						</div>
        					</div>
        				</form>
        			</div>
        		</div>
        	</div>
        </div>
    </div>
</section>
