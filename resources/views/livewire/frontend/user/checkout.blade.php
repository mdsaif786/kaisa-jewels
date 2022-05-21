<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="pageHeading">Secure checkout</h1>
            </div> 
         
            <div class="col-xs-12">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 voffset3">
                        <div class="row">
                            <div class="col-xs-12">
                                <h5>Address</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 voffset2">
                                <div class="topAttrDisp">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="row">
                                                <div wire:loading wire:target="storeAddress" class="col-xs-12">
                                                <h5>Storing Address... </h5>
                                                <hr>
                                                </div>
                                                @if(!$user_address)
                                                <div class="col-xs-12">
                                                    <h5>No Address Found. Must add address</h5>
                                                    <hr>
                                                </div>
                                                @else
                                                <div class="col-xs-12">
                                                    <h5>Delivery Address</h5>
                                                    <hr>
                                                </div>
                                                @endif
                                               </div>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <h6 class="bold">{{$user_address->name ?? ''}}</h6>
                                            </div>
                                            </div>
                                            <p class="voffset2">{{$user_address->address_1 ?? ''}}</p>
                                            <p>{{$user_address->city ?? ''}}, {{$user_address->zone->name ?? ''}} {{$user_address->pincode ?? ''}}</p>
                                            <p>{{$user_address->country->name ?? ''}}</p>
                                            <p class="bold">{{$user_address->phone ?? ''}}</p>
                                            <a href="{{URL::to('/address?t=checkout')}}" class="formBtn submitFormBtn darkBg">Add/Change Delivery Address</a>
                                           {{--  <button type="button" class="formBtn submitFormBtn darkBg" data-toggle="modal" data-target="#AddAddressModal">Add/Change Delivery Address</button> --}}
                                            {{--  <button type="button" class="formBtn submitFormBtn darkBg" data-toggle="modal" data-target="#changeDefaultModal">change Delivery Address</button> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                  
                </div>  
                <hr>    
                <div class="row">
                    <div class="col-xs-12 col-sm-4 voffset3">
                        <div class="row">
                            <div class="col-xs-12">
                                <h6>Payment method</h6>
                                <h5>Pay with Razorpay</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 voffset3">
                                <div class="topAttrDisp">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <h5>Order summary</h5>
                                                    <h6><small>(Inclusive of all taxes)</small></h6>
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <h6>Total Item</h6>
                                                </div>
                                                <div class="col-xs-6 text-right">
                                                    <h6 class="bold">{{@count($order_products)}}</h6>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <h6>Subtotal</h6>
                                                </div>
                                                <div class="col-xs-6 text-right">
                                                    <span class="bold"><i>₹</i>{{$totalAmount}}</span>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <h6>Discount (-)</h6>
                                                </div>
                                                <div class="col-xs-6 text-right">
                                                    <span class="bold text-right"><i>₹</i>{{$discountAmount ?? 0.00}}</span>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <h6>Final amount</h6>
                                                </div>
                                                <div class="col-xs-6 text-right">
                                                    <span class="bold text-right"><i>₹</i>{{$subTotal}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row voffset3">  
                            <div class="col-xs-12">
                                <div class="btnsWrap">
                                    <button type="button" class="formBtn submitFormBtn" id="rzp-button1"><span>Place order<i></i></span></button>
                                </div>
                            </div>
                            <div class="col-xs-12 voffset3">
                                <h6><small>By clicking Place order, you agree to our 
                                    <a href="#" class="greenTxt underline">Terms & conditions</a>, 
                                    <a href="#" class="greenTxt underline">Data Policy</a> and 
                                    <a href="#" class="greenTxt underline">Cookie Policy</a>.</small>
                                </h6>
                            </div>
                        </div>
                    </div>                  
                </div>
            </div>
        </div>
    </div>
</section>
@section('scripts')
@parent
<script>
window.livewire.on('NoAddress', event => {
    alert('You must have one address before checkout');
})
</script>

<!-- RajorPay Payment Below -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

var options = { 
      "key": "{{config('app.rozarpay_key')}}", // Enter the Key ID generated from the Dashboard  
      "amount": "{{$rozarpay_format}}",
      "currency": "INR",  
      "name": "Sthula Purchase Checkout",   
      "description": "",   
      "image": "", 
   //This is a sample Order ID. Pass the `id` obtained in the response of Step 1    
    "handler": function (response){
            console.log(response);
             window.location="<?=URL::to('/thankyou?payment_id=')?>" + response.razorpay_payment_id + "&payment_reference=" + response.razorpay_payment_id + "&order_id=" +"<?=$order_id?>"+"&address_id="+"<?=$user_address->id ?? ''?>"+"&coupan_id="+"<?=$coupan_id?>+&payment_method=2"  
        }, 
        "prefill": { "name": "<?=$user_address->name ?? ''?>",     
                      "email": "<?=auth::user()->email?>",     
                      "contact": "<?=$user_address->phone ?? ''?>"   
                    },  
        "notes": {
            "address": "<?=$user_address->address_1 ?? ''?>"+", <?=$user_address->zone->name ?? ''?>"+", <?=$user_address->pincode ?? ''?>" 
           },   
     "theme": { "color": "#F37254"    }};
    var rzp1 = new Razorpay(options);
    document.getElementById('rzp-button1').onclick = function(e){    
                rzp1.open();    
                e.preventDefault();
            }
            </script>
@endsection
