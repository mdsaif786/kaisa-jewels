<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class ComboOffer extends Model
{
    use SoftDeletes;

    public $table = 'combo_offers';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'offer_title',
        'category_id',
        'sub_category_id',
        'price',
        'discount_amount',
        'discount_percentage',
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

    public function combo_offer_books()
    {
        return $this->belongsToMany(Book::class);
    }
}
