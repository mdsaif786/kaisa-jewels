<?php

namespace App\Http\Requests;

use App\VideoCourseReview;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateVideoCourseReviewRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('video_course_review_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'video_course_id' => [
                'required',
                'integer',
            ],
            'review_point'    => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
