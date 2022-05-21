<section class="half">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 voffset2">
				<h5>Hello, @auth{{auth::user()->name}}@endauth</h5>
				<a href="{{ url('/dashboard') }}" class="greenTxt underline">< Go to dashboard</a>
			</div>
		</div>
		<div class="row">
			@livewire('frontend.user.user-sidebar')
			<div class="col-xs-12 col-sm-8 col-md-9 voffset3">
				<div class="row">
					<div class="col-xs-12 text-center">
                     @if (session()->has('message'))
                        <div class="alert alert-primary">
                            {!! session('message') !!}
                        </div>
                    @endif
                  </div>
					<div class="col-xs-12 voffset2">
						<h5>Account setting</h5>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-8">
						<form wire:submit.prevent="updateProfile">
							<div class="row">
								<div class="col-xs-4 col-md-3 voffset2">
									
									@if($avatar)
			                            <img src="{{ auth()->user()->profile_photo }}" alt="Profile Photo" class="profileCircle">
			                        @else
			                        @auth
			                            <img src="{{auth()->user()->profile_photo}}" alt="Profile Photo" class="profileCircle">
			                        @endauth
			                        @endif
								</div>
								<div class="col-xs-8 col-md-8 voffset3">
									<div class="row">
										<div class="col-xs-12 voffset2">
											<input type="file" wire:model="avatar">
											@error('avatar')
												<span class="text-danger">{{ $message }}</span>
											@enderror
										</div>
										<div class="col-xs-12 voffset1">
											<p><small>You can upload image of max file size 1MB, image will be cropped to 80 X 80 px.</small></p>
										</div>
									</div>
								</div>
							</div>
							<div class="row voffset4">
								<div class="col-xs-12 col-sm-12 voffset2">
									<label>Name</label>
									<input wire:model="name" type="text" class="form-control">
									@error('name')
									   <span class="text-danger">{{ $message }}</span>
									@enderror
								</div>
								
								<div class="col-xs-12 voffset3">
									<label>Email address</label>
									<input  wire:model="email" type="email" class="form-control" disabled>   
								</div>
								<div class="col-xs-12 voffset3">
									<label>Mobile number</label>
									<input  wire:model="phone" type="text" class="form-control numberOnly">
									@error('phone')
                                         <span class="text-danger">{{ $message }}</span>
									@enderror
								</div>
								<div class="col-xs-12 voffset3">
									<label>Change password</label>
									<input wire:model="new_password" type="text" class="form-control">
								</div>
<!-- 								<div class="col-xs-12 col-md-6 voffset3">
									<label>Country</label>
									<div class="custmSelect fullSqr">
										<select name="countrylist" wire:model="countrylist">
											<option value="">Choose country</option>
											<option value="india" selected>India</option>
										</select>
									</div>
								</div> -->
								<!-- <div class="col-xs-12 col-md-6 voffset3">
									<label>Language</label>
									<div class="custmSelect fullSqr">
										<select name="languagelist" wire:model="languagelist">
											<option value="">Choose Language</option>
											<option value="english" selected>English</option>
											<option value="hindi">Hindi</option>
										</select>
									</div>
								</div> -->
								<!-- <div class="col-xs-12 voffset3">
									<label for="newsletter_opt" class="inCheck">Newsletter Subscription
	                                    <input type="checkbox" 
	                                    class="" name="" value=""  id="newsletter_opt" wire:model="newsletter_opt" checked>
	                                    <span class="checkme"></span>
	                                </label>
								</div> -->
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-6 voffset2">
                                   <button class="formBtn fullWidth darkBg">Update Profile</button>
                                </div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
