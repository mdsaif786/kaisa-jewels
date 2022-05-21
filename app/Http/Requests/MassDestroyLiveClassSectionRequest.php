<?php

namespace App\Http\Requests;

use App\LiveClassSection;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyLiveClassSectionRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('live_class_section_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:live_class_sections,id',
        ];
    }
}
