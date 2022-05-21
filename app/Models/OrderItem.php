<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class OrderItem extends Model
{
    use SoftDeletes;

    public $table = 'order_items';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const CART_ITEM_TYPE_SELECT = [
        '1' => 'Normal Book',
        '2' => 'Collection Book',
    ];

    protected $fillable = [
        'order_id',
        'cart_item_type',
        'price',
        'unit_price',
        'quantity',
        'gst_amount',
        'total_amount',
        'book_id',
        'combo_offer_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }

    public function combo_offer()
    {
        return $this->belongsTo(ComboOffer::class, 'combo_offer_id');
    }
}
