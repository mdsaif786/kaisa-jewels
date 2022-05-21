<div class="col-xs-12">
    <label for="product_quantity">Quantity</label>
    <div class="buyAttrInfo">
        <div class="quntyWrap">
            <button wire:click="decrement" type="button" id="">-</button>
            <input type="text" name="product_quantity" id="product_quantity" value="{{$quantity}}" class="numberOnly" readonly>
            <button wire:click="increment" type="button" id="" >+</button>
        </div>
        <button  wire:click="addToCart({{$book_id}})" type="button">
            <i class="icon-addcart"></i><span>Add to cart</span></button>
        <button wire:click="bookAddToWishList()" type="button" id="btn_add_wishlist">
            <i class="icon-addwishlist"></i><span>Add to Wishlist</span>
        </button>
    </div>
    @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    <button wire:click="buyNow({{$book_id}})" type="button" class="fullWidth formBtn voffset1" id="btn_buy_now">Buy now</button>

    <hr/>
</div>
