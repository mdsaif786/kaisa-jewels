<?php

namespace App\Http\Requests;

use App\Models\LoginIp;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateLoginIpRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('login_ip_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'user' => [
                'string',
                'nullable',
            ],
            'ip'   => [
                'string',
                'nullable',
            ],
        ];
    }
}
