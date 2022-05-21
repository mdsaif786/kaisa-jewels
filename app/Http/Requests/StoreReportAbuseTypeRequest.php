<?php

namespace App\Http\Requests;

use App\ReportAbuseType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreReportAbuseTypeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('report_abuse_type_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
            ],
        ];
    }
}