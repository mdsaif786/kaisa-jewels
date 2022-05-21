<div class="currencyWrap">
<span class="selected_currency" data-currency="INR" data-symbool="₹" id="header_selected_currency">INR</span>
<ul class="currencyList">
    @foreach($currencies as $key=>$currency)

    <li data-symbool="{{$currency->currency_symbol}}" data-currency="{{$currency->short_name}}">

        @if(parse_url(Request::fullUrl(), PHP_URL_QUERY))

            @if(Request::has('change_currency'))
            <?php
                $url= Request::fullUrl();
                $old_currency='?change_currency='.Request::input('change_currency');
                $rep=str_replace($old_currency,'',$url);
                $last_word=substr($rep,-1);
                if($last_word=='?')
                {
                  $new_url=$rep.'&change_currency='.$currency->short_name;  
                }else {
                   if(Request::has('q'))
                   {
                    $new_url=URL::to('/').'/search?q='.Request::input('q').'&change_currency='.$currency->short_name;
                   }else {
                    $new_url=$rep.'?change_currency='.$currency->short_name;
                   }
                }
                
                ?>
                <a href="{{$new_url}}">
                    {{$currency->short_name}} 
                </a>
             @else
             <a href="{{Request::fullUrl().'&change_currency='.$currency->short_name}}">
                {{$currency->short_name}}
            </a>
            @endif
        @else
        <a href="{{Request::fullUrl().'?change_currency='.$currency->short_name}}">
            {{$currency->short_name}}
        </a>
      
        @endif
        
    </li>
    @endforeach
</ul>
</div>
