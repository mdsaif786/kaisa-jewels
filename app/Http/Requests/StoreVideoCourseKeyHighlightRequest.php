<?php

namespace App\Http\Requests;

use App\VideoCourseKeyHighlight;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreVideoCourseKeyHighlightRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('video_course_key_highlight_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'video_course_id' => [
                'required',
                'integer',
            ],
            'title'           => [
                'required',
            ],
        ];
    }
}
