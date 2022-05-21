<?php

namespace App\Http\Requests;

use App\Models\SearchKeyword;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroySearchKeywordRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('search_keyword_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:search_keywords,id',
        ];
    }
}
