<?php

namespace App\Http\Requests;

use App\Models\Coupon;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCouponRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('coupon_create');
    }

    public function rules()
    {
        return [
            'coupon_name'          => [
                'string',
                'required',
            ],
            'coupon_code'          => [
                'string',
                'required',
            ],
            'discount'             => [
                'required',
            ],
            'coupon_discount_type' => [
                'required',
            ],
            'status'               => [
                'required',
            ],
        ];
    }
}
