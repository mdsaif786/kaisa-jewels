<?php

namespace App\Http\Requests;

use App\AffiliateGeneratedCourse;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreAffiliateGeneratedCourseRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('affiliate_generated_course_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'date_added' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}
