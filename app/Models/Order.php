<?php

namespace App\Models;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;
use Auth;
use App\Models\OrderItem;

class Order extends Model
{
    use SoftDeletes, Auditable;

    public $table = 'orders';
    const ORDER_STATUS_NEW=1;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'date_modified'
    ];

    const PAYMENT_STATUS_SELECT = [
        '1' => 'Paid',
        '0' => 'Unpaid',
        '2' => 'Need to Verify',
    ];

    const PAYMENT_STATUS_AS_TEXT = [
        'Paid'=>1,
        'Unpaid'=>0,
        'Need to Verify'=>3
    ];

    const PAYMENT_METHOD_SELECT = [
        '1' => 'PayPal',
        '2' => 'RozarPay',
        '3' => 'Strip',
        '4' => 'COD',
        '5' => 'Other',
    ];

    const PAYMENT_METHOD_AS_TEXT = [
        'PayPal'=>1,
        'RozarPay'=>2,
        'Strip'=>3,
        'COD'=>4,
        'Other'=>5
    ];

    protected $fillable = [
        'invoice_prefix',
        'invoice_no',
        'order_amount',
        'shipping_charge',
        'gst_amount',
        'total_book_amount',
        'coupon',
        'coupon_discount',
        'payment_method',
        'payment_status',
        'payment_reference',
        'is_completed',
        'order_status_id',
        'order_date',
        'ip',
        'user_agent',
        'order_key',
        'address_id',
        'created_at',
        'updated_at',
        'deleted_at',
        'date_modified'
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function order_status()
    {
        return $this->belongsTo(OrderStatus::class, 'order_status_id');
    }

    public function address()
    {
        return $this->belongsTo(Address::class, 'address_id');
    }

    public static function cartcount()
    {
        $ip=$_SERVER["REMOTE_ADDR"];
        
        if (\Auth::check()) {
            $user_id=Auth::User()->id;
            
            $getOrder=Order::where(function ($q) use ($user_id) {
                $q->where(['is_completed'=>0]);
            })->orWhere(function ($q) use ($ip) {
                $q->where(['ip'=>$ip,'is_completed'=>0]);
            })->first();
        } else {
            $getOrder=Order::where(['ip'=>$ip,'is_completed'=>0])
                            ->latest('id')
                            ->first();
        }

        if (!$getOrder) {
            return 0;
        }
        return  $cart_order =OrderItem::where('order_id', $getOrder->id)->count() ?? 0;
    }

    public function orderItem()
    {
        return $this->hasMany(OrderItem::class);
    }


    public function getPaymentStatus()
    {
        return self::PAYMENT_STATUS_SELECT[$this->payment_status] ?? '---';
    }

    public function getPaymentMethod()
    {
        return self::PAYMENT_METHOD_SELECT[$this->payment_status] ?? '---';
    }
}
