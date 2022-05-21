<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Coupon extends Model
{
    use SoftDeletes;

    public $table = 'coupons';

    const STATUS_SELECT = [
        '1' => 'Active',
        '0' => 'Inactive',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const COUPON_TYPE_SELECT = [
        '1' => 'General Coupon',
        '2' => 'Category Coupon',
    ];

    const COUPON_DISCOUNT_TYPE_SELECT = [
        '1' => 'Percentage Amount',
        '2' => 'Fixed Amount',
    ];

    protected $fillable = [
        'coupon_name',
        'coupon_code',
        'discount',
        'minimum_amount',
        'coupon_discount_type',
        'status',
        'is_flash_sale',
        'coupon_type',
        'book_category_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function book_category()
    {
        return $this->belongsTo(BookCategory::class, 'book_category_id');
    }
}
