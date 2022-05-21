<?php

namespace App\Http\Requests;

use App\PaymentToVendor;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdatePaymentToVendorRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('payment_to_vendor_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'date_of_payment' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}
