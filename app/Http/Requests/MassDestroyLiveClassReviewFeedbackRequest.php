<?php

namespace App\Http\Requests;

use App\LiveClassReviewFeedback;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyLiveClassReviewFeedbackRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('live_class_review_feedback_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:live_class_review_feedbacks,id',
        ];
    }
}
