<?php

namespace App\Http\Requests;

use App\Models\AvailableCurrency;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAvailableCurrencyRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('available_currency_create');
    }

    public function rules()
    {
        return [
            'country_name'    => [
                'string',
                'required',
            ],
            'currency_symbol' => [
                'string',
                'nullable',
            ],
            'short_name'      => [
                'string',
                'required',
            ],
        ];
    }
}
