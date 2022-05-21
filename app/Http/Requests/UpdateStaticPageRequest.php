<?php

namespace App\Http\Requests;

use App\Models\StaticPage;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateStaticPageRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('static_page_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'static_page_type_id' => [
                'required',
                'integer',
            ],
            'page_name'           => [
                'string',
                'nullable',
            ],
            'page_title'          => [
                'string',
                'nullable',
            ],
            'slug'                => [
                'string',
                'nullable',
            ],
            'meta_keywords'       => [
                'string',
                'nullable',
            ],
            'meta_description'    => [
                'string',
                'nullable',
            ],
        ];
    }
}
