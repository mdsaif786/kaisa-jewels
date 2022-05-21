<?php

namespace App\Http\Requests;

use App\VideoCourseRequirement;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreVideoCourseRequirementRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('video_course_requirement_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'video_course_id' => [
                'required',
                'integer',
            ],
            'title'           => [
                'required',
            ],
        ];
    }
}
