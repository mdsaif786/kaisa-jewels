<?php

namespace App\Http\Requests;

use App\AffiliatePayment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateAffiliatePaymentRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('affiliate_payment_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'from_date'     => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'to_date'       => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'no_of_sale'    => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'next_due_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}
