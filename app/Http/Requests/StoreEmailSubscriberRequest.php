<?php

namespace App\Http\Requests;

use App\Models\EmailSubscriber;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreEmailSubscriberRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('email_subscriber_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

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
