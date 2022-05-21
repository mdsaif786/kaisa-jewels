<?php

namespace App\Http\Requests;

use App\AffiliatePayment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyAffiliatePaymentRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('affiliate_payment_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:affiliate_payments,id',
        ];
    }
}
