<?php

namespace App\Http\Requests;

use App\Models\AvailableCurrency;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyAvailableCurrencyRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('available_currency_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:available_currencies,id',
        ];
    }
}
