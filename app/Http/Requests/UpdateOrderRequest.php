<?php

namespace App\Http\Requests;

use App\Models\Order;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateOrderRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('order_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'invoice_prefix'    => [
                'string',
                'nullable',
            ],
            'invoice_no'        => [
                'string',
                'nullable',
            ],
            'order_amount'      => [
                'required',
            ],
            'shipping_charge'   => [
                'string',
                'nullable',
            ],
            'gst_amount'        => [
                'string',
                'nullable',
            ],
            'total_book_amount' => [
                'string',
                'nullable',
            ],
            'coupon'            => [
                'string',
                'nullable',
            ],
            'coupon_discount'   => [
                'string',
                'nullable',
            ],
            'payment_reference' => [
                'string',
                'nullable',
            ],
            'order_date'        => [
                'string',
                'nullable',
            ],
            'ip'                => [
                'string',
                'nullable',
            ],
            'order_key'         => [
                'string',
                'nullable',
            ],
        ];
    }
}
