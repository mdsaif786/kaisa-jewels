<?php

namespace App\Http\Requests;

use App\LiveClassSection;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreLiveClassSectionRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('live_class_section_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'position' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
