<?php

namespace App\Http\Requests;

use App\LiveClassKeyHighlight;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreLiveClassKeyHighlightRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('live_class_key_highlight_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'live_class_id' => [
                'required',
                'integer',
            ],
            'title'         => [
                'required',
            ],
        ];
    }
}
