<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Blog extends Model
{
    use SoftDeletes;

    public $table = 'blogs';

    const STATUS_SELECT = [
        '1' => 'published',
        '0' => 'Draft',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'image',
        'description',
        'slug',
        'meta_keyword',
        'meta_description',
        'status',
        'no_of_view',
        'no_of_likes',
        'blog_category_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function blog_category()
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id');
    }
}
