<?php

namespace App\Http\Requests;

use App\Models\DefaultCurrency;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDefaultCurrencyRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('default_currency_edit');
    }

    public function rules()
    {
        return [
            'country_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
