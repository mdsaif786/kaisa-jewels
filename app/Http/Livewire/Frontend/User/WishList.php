<?php

namespace App\Http\Livewire\Frontend\User;

use Livewire\Component;
use Illuminate\Support\Str;
use Auth;
use App\Services\CustomerWishList;
use App\Services\CartService;

class WishList extends Component
{
    public function remove($id)
    {
        if ($id) {
            (new CustomerWishList())->wishRemove($id);
            session()->flash('message', 'Wish List Item has been deleted');
            $this->emitTo('frontend.user.user-sidebar', 'wishlistCount');
        }
    }

    public function moveToCart($book_id, $wish_id)
    {
        (new CartService())->addToCart($book_id);
        (new CustomerWishList())->wishRemove($wish_id);
        session()->flash('message', 'Wish List Item successfully move to cart');
        $this->emitTo('frontend.user.user-sidebar', 'wishlistCount');

        return redirect()->to('/cart');
    }

    public function render()
    {
        return view('livewire.frontend.user.wish-list', [
            'wish_lists'=>(new CustomerWishList())->wishList()
        ])->extends('layouts.master');
    }
}
