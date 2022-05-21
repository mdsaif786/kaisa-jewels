<?php

namespace App\Http\Requests;

use App\VideoSource;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreVideoSourceRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('video_source_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [];
    }
}
