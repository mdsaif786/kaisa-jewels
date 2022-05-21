<?php

namespace App\Http\Requests;

use App\LiveClassKeyHighlight;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyLiveClassKeyHighlightRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('live_class_key_highlight_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:live_class_key_highlights,id',
        ];
    }
}
