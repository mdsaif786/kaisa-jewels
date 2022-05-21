<?php

namespace App\Http\Requests;

use App\Gst;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateGstRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('gst_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'max:20',
                'required',
                'unique:gsts,name,' . request()->route('gst')->id,
            ],
        ];
    }
}
