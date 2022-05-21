<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogCategory extends Model
{
    use SoftDeletes;

    public $table = 'blog_categories';

    const STATUS_SELECT = [
        '1' => 'Active',
        '0' => 'Inactive',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'slug',
        'meta_title',
        'meta_description',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }


    public static function generateSlug($string)
    {
        if (!$string) {
            return '';
        }

        return Str::slug($string);
    }
}
