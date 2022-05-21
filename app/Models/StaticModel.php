<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class StaticModel extends Model
{
    public static function generate_invoice_number()
    {
        $order=Order::max('invoice_no');
        if($order){
            return   $order=$order+1;

        }else {
            return $order=1;
        }
    }
}
