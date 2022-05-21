<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Slider extends Model
{
    use SoftDeletes;

    public $table = 'sliders';

    const STATUS_SELECT = [
        '1' => 'Active',
        '0' => 'Inactive',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const SLIDER_POSITION_SELECT = [
        '1' => 'Top Slider',
        '2' => 'Below Slider',
    ];

    protected $fillable = [
        'slider_name',
        'slider_image',
        'target_url',
        'slider_position',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function scopeTopSlider($query)
    {
        return $query->where(['slider_position'=>1,'status'=>1]);
    }

    public function scopeBelowSlider($query)
    {
        return $query->where(['slider_position'=>2,'status'=>1]);
    }
}
