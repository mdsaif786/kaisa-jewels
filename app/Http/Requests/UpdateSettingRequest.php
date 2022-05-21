<?php

namespace App\Http\Requests;

use App\Models\Setting;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSettingRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('setting_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'key' => [
                'string',
                'required',
                'unique:settings,key,' . request()->route('setting')->id,
            ],
        ];
    }
}
