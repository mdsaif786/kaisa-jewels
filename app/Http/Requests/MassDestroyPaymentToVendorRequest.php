<?php

namespace App\Http\Requests;

use App\PaymentToVendor;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPaymentToVendorRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('payment_to_vendor_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:payment_to_vendors,id',
        ];
    }
}
