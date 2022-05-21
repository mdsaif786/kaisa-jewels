<?php

namespace App\Http\Requests;

use App\Models\CurrencyConversion;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCurrencyConversionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('currency_conversion_create');
    }

    public function rules()
    {
        return [
            'country_id' => [
                'required',
                'integer',
            ],
            'from_date'  => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'to_date'    => [
                'string',
                'required',
            ],
            'rate'       => [
                'required',
            ],
        ];
    }
}
