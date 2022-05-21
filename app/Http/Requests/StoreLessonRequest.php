<?php

namespace App\Http\Requests;

use App\Lesson;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreLessonRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('lesson_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'section_name_id'   => [
                'required',
                'integer',
            ],
            'title'             => [
                'required',
            ],
            'video_url'         => [
                'required',
            ],
            'resources_type_id' => [
                'required',
                'integer',
            ],
            'position'          => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
