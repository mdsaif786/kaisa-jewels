<?php

namespace App\Http\Requests;

use App\Models\StaticPageType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyStaticPageTypeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('static_page_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:static_page_types,id',
        ];
    }
}
