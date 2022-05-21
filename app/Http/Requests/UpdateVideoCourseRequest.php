<?php

namespace App\Http\Requests;

use App\VideoCourse;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateVideoCourseRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('video_course_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'                => [
                'required',
            ],
            'start_date'          => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'course_validity_id'  => [
                'required',
                'integer',
            ],
            'educators.*'         => [
                'integer',
            ],
            'educators'           => [
                'array',
            ],
            'languages.*'         => [
                'integer',
            ],
            'languages'           => [
                'array',
            ],
            'offer_end_date'      => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'no_of_lecture'       => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'no_of_file_download' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'admin_percentage'    => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'vendor_percentage'   => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
