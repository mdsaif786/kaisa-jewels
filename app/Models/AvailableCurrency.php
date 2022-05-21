<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class AvailableCurrency extends Model
{
    use SoftDeletes;

    public $table = 'available_currencies';

    const STATUS_SELECT = [
        '1' => 'Active',
        '0' => 'InActive',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'country_name',
        'currency_symbol',
        'short_name',
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
