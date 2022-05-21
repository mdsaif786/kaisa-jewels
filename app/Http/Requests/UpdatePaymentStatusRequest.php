<?php

namespace App\Http\Requests;

use App\PaymentStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdatePaymentStatusRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('payment_status_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'title' => [
                'max:15',
                'required',
                'unique:payment_statuses,title,' . request()->route('payment_status')->id,
            ],
        ];
    }
}
