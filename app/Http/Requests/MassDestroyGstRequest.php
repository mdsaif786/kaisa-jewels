<?php

namespace App\Http\Requests;

use App\Gst;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyGstRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('gst_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:gsts,id',
        ];
    }
}
