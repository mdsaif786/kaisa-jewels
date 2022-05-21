<?php

namespace App\Http\Requests;

use App\Models\SearchKeyword;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSearchKeywordRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('search_keyword_create');
    }

    public function rules()
    {
        return [
            'keyword_name' => [
                'string',
                'required',
            ],
            'ip'           => [
                'string',
                'nullable',
            ],
        ];
    }
}
