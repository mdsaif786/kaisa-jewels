<?php

namespace App\Http\Requests;

use App\AffiliateGeneratedCourse;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyAffiliateGeneratedCourseRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('affiliate_generated_course_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:affiliate_generated_courses,id',
        ];
    }
}
