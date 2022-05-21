<section class="silverBg">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 voffset2">
				<h5>Hello, {{auth::user()->name}}</h5>
				<a href="{{ url('/dashboard') }}" class=" underline">< Go to dashboard</a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<h1 class="pageHeading">Your address</h1>				
			</div>
			<div class="col-xs-12 voffset3">
				<div class="col-xs-12 col-sm-6 voffset3">
					<div class="topAttrDisp">
						<div class="row">
							@foreach($addresses as $key=>$user_address)
							<div class="col-xs-12">
								<h6 class="bold">{{$user_address->name ?? ''}}</h6>
								<p class="voffset2">{{$user_address->address_1 ?? ''}}</p>
								<p>{{$user_address->city ?? ''}}, {{$user_address->zone->name ?? ''}} {{$user_address->pincode ?? ''}}</p>
								<p>{{$user_address->country->name ?? ''}}</p>
								<p>{{$user_address->phone ?? ''}}</p>
								
								 <button wire:click="removeAddress({{$user_address->id}})" type="button" class="voffset2 btn btn-danger">Remove</button>
								 
								 @if($user_address->id==auth()->user()->default_address)
								 <button type="button" class="voffset2 btn btn-success"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path></svg> Deliver to this address</button>
								 @else
								 <button wire:click="chooseDefaultAddress({{$user_address->id}})" type="button" class="voffset2 btn btn-info">Deliver to this address</button>
								 @endif
							</div>
							<div class="col-xs-12"><hr></div>
							@endforeach
							{{-- <div class="col-xs-12">
								<h6 class="bold">Sanjeet Kumar Singh</h6>
								<p class="voffset2">A-75, 2nd Floor (back side), Street No.-19, Bharat Vihar Rd.</p>
								<p>Rajapuri, Uttam Nagar</p>
								<p>NEW DELHI, DELHI 110059</p>
								<p>India</p>
								 <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
								<div class="btnsWrap voffset2">
									<a href="#" class="btn btn-success">Edit</a>
									<a href="#">Remove</a>
								</div>

								
							</div> --}}
						</div>
					</div>
				</div>
			</div>
			@if (session()->has('message'))

            <div class="col-xs-12 col-sm-6">
            	<br>
            	<div class="alert alert-success">
                {{ session('message') }}
            </div>
            </div>
        @endif
			<div class="col-xs-12 voffset4">
				<h6 class="bold">Add new address</h6>
			</div>
			<div class="col-xs-12">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<form wire:submit.prevent="storeAddress" id="add_new_address" class="validateForm">
							<div class="row">

								<div class="col-xs-12 voffset2">
									<input wire:model="name" type="text" name="fullname" placeholder="Full name" class="form-control">
									 @error('name') <span class="text-danger">{{ $message }}</span>@enderror
								</div>
								<div class="col-xs-12 voffset2">
									<input wire:model="phone" type="text" name="phone" placeholder="phone number" class="form-control">
									 @error('phone') <span class="text-danger">{{ $message }}</span>@enderror
								</div>
								<div class="col-xs-12 voffset2">
									<input wire:model="address_1" type="text" name="address_1" placeholder="Address line 1" class="form-control">
									 @error('address_1') <span class="text-danger">{{ $message }}</span>@enderror
								</div>
								<div class="col-xs-12 voffset2">
									<input wire:model="address_2" type="text" name="address_2" placeholder="Address line 2" class="form-control">
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-6 voffset2">
									<div class="custmSelect fullSqr">
										
										<select name="countrylist" wire:model.lazy="country_id">
		                                <option>Choose Country</option>
		                                @foreach($country_list as $key=>$country)
		                                 <option value="{{$country->id}}">{{$country->name}}</option>
		                                @endforeach
                            			</select>
                           
									</div>
									 @error('country_id') <span class="text-danger">{{ $message }}</span>@enderror
								</div>
								<div class="col-xs-12 col-sm-6 voffset2">
									<div class="custmSelect fullSqr">
										
									<select name="statelist" wire:model.lazy="zone_id">
		                                <option>Choose State/Zone</option>
		                                @foreach($zone_list as $key=>$state)
		                                 <option value="{{$state->id}}">{{$state->name}}</option>
		                                @endforeach
                            		</select>
                           
									</div>
									 @error('zone_id') <span class="text-danger">{{ $message }}</span>@enderror
								</div>
								<div class="col-xs-12 col-sm-6 voffset2">
									<input wire:model.lazy="city" type="text" name="city" placeholder="City name" class="form-control">
									@error('city') <span class="text-danger">{{ $message }}</span>@enderror
								</div>
								<div class="col-xs-12 col-sm-6 voffset2">
									<input wire:model.lazy="pincode" type="number" name="pincode" placeholder="Zip/pin code" class="form-control">
									@error('pincode') <span class="text-danger">{{ $message }}</span>@enderror
								</div>
								<div class="col-xs-12 voffset2">
									<input wire:model.lazy="landmark" type="text" name="landmark" placeholder="Land mark" class="form-control">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 voffset2">
									<div class="custmSelect fullSqr">
										<select name="is_default" wire:model.lazy="is_default">
		                                <option>Make It Default Address</option>
		                                <option value="1">Yes</option>
		                                <option value="0">No</option>
                            			</select>
									</div>
								</div>
							<div class="row">
								<div class="col-xs-12 voffset2">
									<button type="submit" class="formBtn submitFormBtn fullWidth darkBg" id="save_new_address">Save address</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>
