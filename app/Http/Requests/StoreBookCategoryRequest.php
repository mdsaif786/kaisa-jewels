<?php

namespace App\Http\Requests;

use App\Models\BookCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreBookCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('book_category_create');
    }

    public function rules()
    {
        return [
            'name'             => [
                'string',
                'nullable',
            ],
            'set_order'        => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'slug'             => [
                'string',
                'nullable',
            ],
            'meta_keywords'    => [
                'string',
                'nullable',
            ],
            'meta_description' => [
                'string',
                'nullable',
            ],
        ];
    }
}
