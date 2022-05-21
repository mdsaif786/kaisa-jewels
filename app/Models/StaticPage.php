<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class StaticPage extends Model
{
    use SoftDeletes;

    public $table = 'static_pages';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'static_page_type_id',
        'page_name',
        'page_title',
        'page_description',
        'slug',
        'meta_keywords',
        'meta_description',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function static_page_type()
    {
        return $this->belongsTo(StaticPageType::class, 'static_page_type_id');
    }
}
