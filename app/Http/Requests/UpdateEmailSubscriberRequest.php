<?php

namespace App\Http\Requests;

use App\Models\EmailSubscriber;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateEmailSubscriberRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('email_subscriber_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'  => [
                'string',
                'nullable',
            ],
            'email' => [
                'string',
                'required',
            ],
        ];
    }
}
