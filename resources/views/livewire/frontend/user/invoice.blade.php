<section id="invoice_section">
    @section('css')
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/print.css') }}">
    @endsection
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="printDoc_wrapper" id="printDoc">
                    <div class="printTable">
                        <table width="100%" cellspacing="8" cellpadding="8">                            
                            <tbody>
                                <tr>
                                    <td>
                                        <table width="100%" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td colspan="3"><hr/></td>
                                            </tr>
                                            <tr>
                                                <td width="50%">
                                                    <img src="{{ asset('img/sthula-logo.svg') }}" style="max-width: 200px;" alt="online sthula brand logo">
                                                </td>
                                                <td width="50%" style="text-align: right;">
                                                    <h5>Sthula PVT. LTD.</h5>
                                                    <h6>xxxxxxxxxxxxxx,<br>xxxxxx,New Delhi - xxxxxxx</h6>
                                                </td>
                                            </tr>
                                            <tr><td colspan="3"><hr/></td></tr>
                                            <tr>
                                                <td width="50%" valign="bottom">
                                                    <h6>CIN No. xxxxxxx</h6>
                                                    <h6>GSTIN No. xxxxxxxxx</h6>
                                                </td>
                                                <td width="50%" valign="top" style="text-align: right;">
                                                    <h6>Mobile No. +91 xxxx-xxxxx</h6>
                                                    <p>support@sthula.com</p>
                                                </td>
                                            </tr>
                                            <tr><td colspan="3"><hr/></td></tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <h3 style="text-transform: uppercase;">Tax Invoice</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 20px 0;">
                                        <table width="100%" cellspacing="0" cellpadding="0">
                                            <tr>                                                
                                                <td width="33%" valign="top">
                                                    <h5>Order Number</h5>
                                                    <h4 style="text-transform: uppercase;">{{$orders->invoice_prefix.$orders->invoice_no}}</h4>
                                                </td>

                                                <td width="33%" valign="top">
                                                    @if(!empty($orders->address_1))
                                                    <h5>Billing Details</h5>
                                                    <h6>{{$orders->address->name ?? ''}}</h6>
                                                    <address>
                                                        {{$orders->address->address_1 ?? ''}}, <br>
                                                        {{$orders->address->city ?? ''}},<br>
                                                        {{$orders->address->zone->name ?? ''}}-{{$orders->address->pincode ?? ''}}
                                                    </address>
                                                    @endif
                                                </td>
                                                <td width="33%" valign="top" style="text-align: right;">
                                                    <h5>Customer Contact</h5>
                                                    <h6>Mobile No. {{$orders->address->phone ?? ''}}</h6>
                                                    <h6>{{auth::user()->email}}</h6>
                                                </td>
                                            </tr>
                                        </table>                                        
                                    </td>
                                </tr>
                                <tr><td colspan="3"><hr/></td></tr>
                                <tr>
                                    <td style="padding: 20px 0 10px 0">
                                        <h5>Order Summary</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="100%" cellspacing="0" cellpadding="0">
                                            
                                            @foreach($order_items as $order_item)
                                            <tr><td colspan="3"><hr/></td></tr>
                                           
                                            <tr>
                                                
                                                <td width="33%" valign="top">
                                                    <p style="font-size: 11px; text-transform: uppercase;">Book Name</p>
                                                    <h6>{{$order_item->book->name ?? ''}}</h6>
                                                   
                                                </td>
                                                <td width="33%" valign="top">
                                                    <p style="font-size: 11px; text-transform: uppercase;">Book Quantity</p>
                                                    <h6>{{$order_item->quantity}}</h6>
                                                </td>
                                                <td width="33%" valign="top" style="text-align: right;">
                                                    @if($coupons)
                                                    @php
                                                     $price = ($order_item->price - $coupons->discount);
                                                    @endphp
                                                    <h5>₹ {{$price}}</h5>
                                                    <h6 style="font-size: 11px;">₹ {{$order_item->price}} - ₹{{$coupons->discount}}</h6>
                                                    <h6 style="font-size: 11px;">Coupon Applied - <span style="text-transform: uppercase; color: red">{{$coupons->coupon_code}}</span></h6>
                                                    @else
                                                    <h5>₹ {{$order_item->price}}</h5>
                                                    <h6 style="font-size: 11px;">No Coupon Applied</h6>
                                                    @endif
                                                </td>
                                            </tr>
                                            
                                            
                                            @endforeach
                                          
                                            <tr><td colspan="3"><hr/></td></tr>
                                            <tr>
                                                <td colspan="2" style="text-align: right; line-height: 2;">
                                                    <h5>Sub Total</h5>
                                                    <h6>Discount (-)</h6>
                                                    {{-- <h6>GST Charge (+)</h6> --}}
                                                    <h5>Paid Amount</h5>
                                                </td>
                                                <td colspan="3" style="text-align: right; line-height: 2;">
                                                    <h5>₹{{$orders->total_book_amount}}</h5>
                                                    @if($coupons)
                                                    <h6>₹{{$coupons->discount*$order_items->count()}}</h6>
                                                    @else
                                                    <h6>₹ 0.00</h6>
                                                    @endif
                                                    
                                                    @if($coupons)
                                                    <h5>₹ {{($orders->total_course_amount+$orders->gst_amount)-($coupons->discount*$order_items->count())}}</h5>
                                                    @else
                                                    <h5>₹ {{($orders->total_book_amount)}}</h5>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr><td colspan="3"><hr/></td></tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 20px 0 10px 0">
                                        <h5>Payment Details</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="line-height: 1.5">
                                        <h6>Payment company: {{$orders->getPaymentMethod()}}</h6>
                                        <h6>Payment Ref:{{$orders->payment_reference}}</h6>
                                        <h6>Payment Status: {{$orders->getPaymentStatus()}}</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 20px 0 10px 0">
                                        <h5>Important Note:</h5>
                                        <h6>This is an electronic generated invoice so doesn't require any signature.</h6>
                                    </td>
                                </tr>
                                <tr><td colspan="3"><hr/></td></tr>
                                <tr>
                                    <td style="line-height: 2; text-align: center; padding: 20px 0;">
                                        
                                        <h5 style="text-transform: uppercase;">Thanks for your business</h5>
                                    </td>
                                </tr>
                                <tr><td colspan="3"><hr/></td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
   window.print();
</script>
