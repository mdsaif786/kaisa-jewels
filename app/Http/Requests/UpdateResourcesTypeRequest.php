<?php

namespace App\Http\Requests;

use App\ResourcesType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateResourcesTypeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('resources_type_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
            ],
        ];
    }
}
