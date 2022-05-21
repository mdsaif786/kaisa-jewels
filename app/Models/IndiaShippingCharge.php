<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class IndiaShippingCharge extends Model
{
    use SoftDeletes;

    public $table = 'india_shipping_charges';

    const STATUS_SELECT = [
        '1' => 'Deliver',
        '0' => 'Not Deliver',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'pincode',
        'circle_name',
        'taluk',
        'office_name',
        'district_name',
        'region_name',
        'hq_rate_per_kg',
        'other_rate',
        'cod_rate',
        'total_amount',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
