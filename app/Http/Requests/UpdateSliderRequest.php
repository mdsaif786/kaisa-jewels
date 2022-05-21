<?php

namespace App\Http\Requests;

use App\Models\Slider;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSliderRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('slider_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'slider_name'  => [
                'string',
                'nullable',
            ],
            'slider_image' => [
                'file',
                'nullable',
            ],
            'target_url'   => [
                'string',
                'nullable',
            ],
        ];
    }
}
