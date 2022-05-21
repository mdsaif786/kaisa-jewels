<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class BlockOffer extends Model
{
    use SoftDeletes;

    public $table = 'block_offers';

    const STATUS_SELECT = [
        '1' => 'Active',
        '2' => 'Inactive',
    ];

    const OFFER_TYPE_SELECT = [
        '1' => 'General',
        '2' => 'Category',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'offer_type',
        'general_discount',
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
