<?php

namespace App\Http\Requests;

use App\VideoCourseOutcome;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateVideoCourseOutcomeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('video_course_outcome_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

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
