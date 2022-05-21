<!-- Modal -->
<div wire:ignore.self class="modal fade" id="AddAddressModal" tabindex="-1" role="dialog" aria-labelledby="AddAddressModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AddAddressModalLabel">Add New Address</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" wire:model="user_id">
                        <label for="editName">Name</label>
                        <input wire:model="name" type="text" class="form-control" id="editName" placeholder="Enter Name">
                        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="editAddress1">Address-1</label>
                        <input wire:model="address_1" type="text" class="form-control" id="editAddress1" placeholder="Enter Address-1">
                        @error('address1') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="editPhone">Phone Number</label>
                        <input type="text" class="form-control" wire:model.lazy="phone" id="editAddress2" placeholder="Enter Phone Number">
                        @error('address2') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <div class="custmSelect fullSqr">
                            <select name="countrylist" wire:model.lazy="country_id">
                                <option>Choose Country</option>
                                @foreach($country_list as $key=>$country)
                                 <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custmSelect fullSqr">
                            <select name="countrylist" wire:model.lazy="zone_id">
                                <option>Choose State</option>
                                @foreach($zone_list as $key=>$state)
                                 <option value="{{$state->id}}">{{$state->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                           <div class="col-xs-12 col-sm-6 voffset2">
                            <label for="editAddress2">City Name</label>
                                <input type="text" wire:model.lazy="city" placeholder="City name" class="form-control">
                            </div>
                            <div class="col-xs-12 col-sm-6 voffset2">
                                <label for="editAddress2">Zip/Pin Code</label>
                                <input type="text" wire:model.lazy="pincode" placeholder="Zip/pin code" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custmSelect fullSqr">
                            <select name="countrylist" wire:model.lazy="is_default">
                                <option>Make It Default Address</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" wire:click="storeAddress()" class="btn btn-success" data-dismiss="modal">Create Address</button>
            </div>
       </div>
    </div>
</div>
