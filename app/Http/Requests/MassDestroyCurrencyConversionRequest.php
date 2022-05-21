<?php

namespace App\Http\Requests;

use App\Models\CurrencyConversion;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCurrencyConversionRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('currency_conversion_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:currency_conversions,id',
        ];
    }
}
