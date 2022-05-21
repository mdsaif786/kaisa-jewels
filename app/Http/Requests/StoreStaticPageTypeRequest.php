<?php

namespace App\Http\Requests;

use App\Models\StaticPageType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreStaticPageTypeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('static_page_type_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:static_page_types',
            ],
        ];
    }
}
