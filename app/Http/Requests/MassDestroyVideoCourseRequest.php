<?php

namespace App\Http\Requests;

use App\VideoCourse;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyVideoCourseRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('video_course_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:video_courses,id',
        ];
    }
}
