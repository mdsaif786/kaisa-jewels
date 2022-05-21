<?php

namespace App\Http\Requests;

use App\LiveClassLesson;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateLiveClassLessonRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('live_class_lesson_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'section_name_id' => [
                'required',
                'integer',
            ],
            'title'           => [
                'required',
            ],
            'video_url'       => [
                'required',
            ],
            'position'        => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
