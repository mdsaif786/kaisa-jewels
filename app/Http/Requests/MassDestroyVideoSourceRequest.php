<?php

namespace App\Http\Requests;

use App\VideoSource;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyVideoSourceRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('video_source_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:video_sources,id',
        ];
    }
}
