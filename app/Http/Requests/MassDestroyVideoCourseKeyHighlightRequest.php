<?php

namespace App\Http\Requests;

use App\VideoCourseKeyHighlight;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyVideoCourseKeyHighlightRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('video_course_key_highlight_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:video_course_key_highlights,id',
        ];
    }
}
