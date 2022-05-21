<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;
use App\Models\AvailableCurrency;
use App\Models\CurrencyConversion;
use App\Models\DefaultCurrency;
use App\Models\Country;

class Book extends Model
{
    use SoftDeletes;

    public $table = 'books';

    const STATUS_SELECT = [
        '1' => 'Active',
        '0' => 'Inactive',
    ];

    const BOOK_TYPE_SELECT = [
        '1' => 'Normal Book',
        '2' => 'EBook',
    ];

    protected $dates = [
        'publication_date',
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
        'isbn',
        'isbn_10',
        'isbn_30',
        'weight',
        'sku',
        'dimensions',
        'no_of_pages',
        'book_type',
        'book_authors_id',
        'publisher_id',
        'stock_status_id',
        'language_id',
        'status',
        'publication_city_or_country',
        'publication_date',
        'coupon_discount',
        'no_of_qty_for_discount',
        'coupon_code',
        'slug',
        'meta_keywords',
        'meta_description',
        'handpicked',
        'new_arrival',
        'best_sellers',
        'all_time_classic',
        'no_of_viewed',
        'created_at',
        'updated_at',
        'deleted_at',
        'condition',
        'quantity'
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

    public function book_authors()
    {
        return $this->belongsTo(Author::class, 'book_authors_id');
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class, 'publisher_id');
    }

    public function stock_status()
    {
        return $this->belongsTo(StockStatus::class, 'stock_status_id');
    }

    public function binding_types()
    {
        return $this->belongsToMany(Binding::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id');
    }

    public function getPublicationDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setPublicationDateAttribute($value)
    {
        $this->attributes['publication_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }


    public function getPriceAttribute($value)
    {
        $getCurrecySymbol=session('currency') ?? config('app.currency');

        if($getCurrecySymbol!='INR')
        {
            $notation=AvailableCurrency::where('short_name',$getCurrecySymbol)
                                ->select('id','country_name')
                                ->first();
            $searchCurrency=CurrencyConversion::where('country_id',$notation->country_name)->first();
          return  number_format($value/$searchCurrency->rate, 2,'.','');
        }

        return $value;
    }

    public function getMrpAttribute($value)
    {
        $getCurrecySymbol=session('currency') ?? config('app.currency');

        if($getCurrecySymbol!='INR')
        {
            $notation=AvailableCurrency::where('short_name',$getCurrecySymbol)
                                ->select('id','country_name')
                                ->first();
            $searchCurrency=CurrencyConversion::where('country_id',$notation->country_name)->first();
          return  number_format($value/$searchCurrency->rate, 2,'.','');
        }

        return $value;
    }

    public function getDiscountConversionAttribute()
    {
        
        return $this->discount;
    }

    public function getSymbolAttribute()
    {

        $getCurrecySymbol=session('currency') ?? config('app.currency');
        $notation=AvailableCurrency::where('short_name',$getCurrecySymbol)
                                ->select('id','currency_symbol')
                                ->first();

        return $notation->currency_symbol;
    }


    public function scopeActiveHandpicked($query)
    {
        return $query->where(['handpicked'=>1,'status'=>1]);
    }

    public function scopeActiveBestSellers($query)
    {
        return $query->where(['best_sellers'=>1,'status'=>1]);
    }
    public function scopeActiveNewArrivals($query)
    {
        return $query->where(['new_arrival'=>1,'status'=>1]);
    }
    public function scopeActiveAllTimeClassic($query)
    {
        return $query->where(['all_time_classic'=>1,'status'=>1]);
    }

    public static function discountPercentageCalculator($mrp,$price)
      {
         //Discount = Marked Price - Selling Price

          //Discount% = Discount/Marked Price × 100%.
          $discount=$mrp-$price;
          $discountPercentage=($discount/$mrp)*100;
          return ceil($discountPercentage);
   
      }

}
