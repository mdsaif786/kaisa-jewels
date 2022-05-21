<?php

namespace App\Http\Requests;

use App\LiveClass;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateLiveClassRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('live_class_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'class_name'           => [
                'required',
            ],
            'offer_end_date'       => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'educators.*'          => [
                'integer',
            ],
            'educators'            => [
                'array',
            ],
            'languages.*'          => [
                'integer',
            ],
            'languages'            => [
                'array',
            ],
            'no_of_enroll_student' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'admin_percentage'     => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'vendor_percentage'    => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
