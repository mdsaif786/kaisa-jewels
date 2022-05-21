<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class CollectionBook extends Model
{
    use SoftDeletes;

    public $table = 'collection_books';

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
        'category_id',
        'sub_category_id',
        'name',
        'description',
        'image',
        'mrp',
        'price',
        'discount',
        'weight',
        'sku',
        'stock_status_id',
        'language_id',
        'status',
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

    public function category()
    {
        return $this->belongsTo(BookCategory::class, 'category_id');
    }

    public function sub_category()
    {
        return $this->belongsTo(BookCategory::class, 'sub_category_id');
    }

    public function collection_books()
    {
        return $this->belongsToMany(Book::class);
    }

    public function stock_status()
    {
        return $this->belongsTo(StockStatus::class, 'stock_status_id');
    }

    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id');
    }
}
