<?php

namespace App\Http\Requests;

use App\CourseValidity;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCourseValidityRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('course_validity_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:course_validities,id',
        ];
    }
}
