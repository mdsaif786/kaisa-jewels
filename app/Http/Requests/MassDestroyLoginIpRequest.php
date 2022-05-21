<?php

namespace App\Http\Requests;

use App\Models\LoginIp;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyLoginIpRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('login_ip_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:login_ips,id',
        ];
    }
}
