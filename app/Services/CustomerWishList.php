<?php

namespace App\Services;

use App\Models\WishList;
use Auth;

class CustomerWishList
{
    public function addToWish($book_id)
    {
        $wish=new WishList();
        $wish->ip=$_SERVER["REMOTE_ADDR"];
        $wish->book_id=$book_id;
      
        if (Auth::check()) {
            $wish->user_id=Auth::id();
        }
        $wish->save();
        return true;
    }


    public function wishListCount()
    {
        $ip=$_SERVER["REMOTE_ADDR"];
        if (Auth::check()) {
            $user_id=Auth::User()->id;
            
            return WishList::where(function ($q) use ($user_id) {
                $q->where(['user_id'=>$user_id]);
            })->orWhere(function ($q) use ($ip) {
                $q->where(['ip'=>$ip]);
            })->count();
        } else {
            return WishList::where(['ip'=>$ip])
              ->count();
        }
    }

    public function wishList()
    {
        $ip=$_SERVER["REMOTE_ADDR"];
        if (Auth::check()) {
            $user_id=Auth::User()->id;
           
            return WishList::with(['book'])->where(function ($q) use ($user_id) {
                $q->where(['user_id'=>$user_id]);
            })->orWhere(function ($q) use ($ip) {
                $q->where(['ip'=>$ip]);
            })->get();
        } else {
            return WishList::with(['book'])->where(['ip'=>$ip])
              ->get();
        }
    }


    public function wishRemove($id)
    {
        $wish=WishList::find($id);

        if ($wish) {
            $wish->delete();
        }
    
        return true;
    }
}
