<?php

namespace App\Http\Requests;

use App\Models\IndiaShippingCharge;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyIndiaShippingChargeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('india_shipping_charge_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:india_shipping_charges,id',
        ];
    }
}
