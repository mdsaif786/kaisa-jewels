<?php

namespace App\Http\Requests;

use App\Models\DefaultCurrency;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyDefaultCurrencyRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('default_currency_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:default_currencies,id',
        ];
    }
}
