<?php

namespace App\Models;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class BookCategory extends Model
{
    use SoftDeletes, Auditable;

    public $table = 'book_categories';

    const SHOW_IN_MENU_SELECT = [
        '1' => 'Yes',
        '0' => 'No',
    ];

    const STATUS_SELECT = [
        '1' => 'Active',
        '0' => 'Inactive',
    ];

    const SHOW_IN_MEGA_MENU_SELECT = [
        '1' => 'Yes',
        '0' => 'No',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'parent_category_id',
        'status',
        'set_order',
        'show_in_mega_menu',
        'show_in_menu',
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

    public function parent_category()
    {
        return $this->belongsTo(BookCategory::class, 'parent_category_id');
    }
}
