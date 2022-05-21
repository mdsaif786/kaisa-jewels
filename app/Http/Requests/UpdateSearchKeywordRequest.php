<?php

namespace App\Http\Requests;

use App\Models\SearchKeyword;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSearchKeywordRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('search_keyword_edit');
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
