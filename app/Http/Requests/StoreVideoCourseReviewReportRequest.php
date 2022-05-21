<?php

namespace App\Http\Requests;

use App\VideoCourseReviewReport;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreVideoCourseReviewReportRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('video_course_review_report_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [];
    }
}
