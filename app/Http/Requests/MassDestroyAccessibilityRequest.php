<?php

namespace App\Http\Requests;

use App\Accessibility;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyAccessibilityRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('accessibility_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:accessibilities,id',
        ];
    }
}
