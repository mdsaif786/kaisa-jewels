<?php

namespace App\Http\Requests;

use App\VideoCourseReview;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyVideoCourseReviewRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('video_course_review_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:video_course_reviews,id',
        ];
    }
}
