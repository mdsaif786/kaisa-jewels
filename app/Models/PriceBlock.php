<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;
use App\Models\AvailableCurrency;
use App\Models\CurrencyConversion;
use App\Models\DefaultCurrency;

class PriceBlock extends Model
{
    use SoftDeletes;

    public $table = 'price_blocks';

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
        'block_title',
        'status',
        'set_order',
        'created_at',
        'updated_at',
        'deleted_at',
        'price'
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }


    public function getSymbolAttribute()
    {

        $getCurrecySymbol=session('currency') ?? config('app.currency');
        $notation=AvailableCurrency::where('short_name',$getCurrecySymbol)
                                ->select('id','currency_symbol')
                                ->first();

        return $notation->currency_symbol;
    }

    // public function getPriceAttribute($value)
    // {
    //     $getCurrecySymbol=session('currency') ?? config('app.currency');

    //     if($getCurrecySymbol!='INR')
    //     {
    //         $notation=AvailableCurrency::where('short_name',$getCurrecySymbol)
    //                             ->select('id','country_name')
    //                             ->first();
    //         $searchCurrency=CurrencyConversion::where('country_id',$notation->country_name)->first();
    //       return  number_format($value/$searchCurrency->rate, 2,'.','');
    //     }

    //     return $value;
    // }
}
