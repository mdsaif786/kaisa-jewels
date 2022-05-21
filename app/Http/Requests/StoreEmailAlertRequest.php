<?php

namespace App\Http\Requests;

use App\EmailAlert;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreEmailAlertRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('email_alert_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [];
    }
}
