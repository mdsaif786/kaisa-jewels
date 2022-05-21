<?php

namespace App\Http\Requests;

use App\Models\IndiaShippingCharge;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateIndiaShippingChargeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('india_shipping_charge_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'pincode'        => [
                'string',
                'required',
            ],
            'circle_name'    => [
                'string',
                'nullable',
            ],
            'taluk'          => [
                'string',
                'nullable',
            ],
            'office_name'    => [
                'string',
                'nullable',
            ],
            'district_name'  => [
                'string',
                'nullable',
            ],
            'region_name'    => [
                'string',
                'nullable',
            ],
            'hq_rate_per_kg' => [
                'string',
                'nullable',
            ],
            'other_rate'     => [
                'string',
                'nullable',
            ],
            'cod_rate'       => [
                'string',
                'nullable',
            ],
            'total_amount'   => [
                'string',
                'nullable',
            ],
        ];
    }
}
