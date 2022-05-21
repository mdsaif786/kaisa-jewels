<?php

namespace App\Http\Requests;

use App\RequestRefund;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateRequestRefundRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('request_refund_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [];
    }
}
