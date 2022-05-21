<?php

namespace App\Http\Requests;

use App\VideoCourseSection;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyVideoCourseSectionRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('video_course_section_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:video_course_sections,id',
        ];
    }
}
