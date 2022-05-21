<?php

namespace App\Http\Requests;

use App\CourseValidity;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreCourseValidityRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('course_validity_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
                'unique:course_validities',
            ],
        ];
    }
}
