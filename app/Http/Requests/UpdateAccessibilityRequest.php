<?php

namespace App\Http\Requests;

use App\Accessibility;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateAccessibilityRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('accessibility_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
            ],
        ];
    }
}
