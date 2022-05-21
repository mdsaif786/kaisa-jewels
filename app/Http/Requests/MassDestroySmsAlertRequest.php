<?php

namespace App\Http\Requests;

use App\SmsAlert;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroySmsAlertRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('sms_alert_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:sms_alerts,id',
        ];
    }
}
