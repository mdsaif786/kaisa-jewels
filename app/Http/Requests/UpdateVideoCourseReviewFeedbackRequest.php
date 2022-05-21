<?php

namespace App\Http\Requests;

use App\VideoCourseReviewFeedback;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateVideoCourseReviewFeedbackRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('video_course_review_feedback_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [];
    }
}
