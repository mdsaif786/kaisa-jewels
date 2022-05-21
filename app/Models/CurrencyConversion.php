<?php

namespace App\Models;

use App\Traits\Auditable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class CurrencyConversion extends Model
{
    use SoftDeletes, Auditable;

    public $table = 'currency_conversions';

    protected $dates = [
        'from_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'country_id',
        'from_date',
        'to_date',
        'rate',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function getFromDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setFromDateAttribute($value)
    {
        $this->attributes['from_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }
}
