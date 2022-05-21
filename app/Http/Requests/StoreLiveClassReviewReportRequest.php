<?php

namespace App\Http\Requests;

use App\LiveClassReviewReport;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreLiveClassReviewReportRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('live_class_review_report_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [];
    }
}
