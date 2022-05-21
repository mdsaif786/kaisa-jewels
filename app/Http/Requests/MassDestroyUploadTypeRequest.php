<?php

namespace App\Http\Requests;

use App\UploadType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyUploadTypeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('upload_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:upload_types,id',
        ];
    }
}
