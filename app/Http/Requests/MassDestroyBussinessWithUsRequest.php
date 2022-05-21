<?php

namespace App\Http\Requests;

use App\Models\BussinessWithUs;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyBussinessWithUsRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('bussiness_with_us_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:bussiness_withuses,id',
        ];
    }
}
