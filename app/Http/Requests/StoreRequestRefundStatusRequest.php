<?php

namespace App\Http\Requests;

use App\RequestRefundStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreRequestRefundStatusRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('request_refund_status_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
                'unique:request_refund_statuses',
            ],
        ];
    }
}
