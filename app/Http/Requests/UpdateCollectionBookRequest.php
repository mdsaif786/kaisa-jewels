<?php

namespace App\Http\Requests;

use App\Models\CollectionBook;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCollectionBookRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('collection_book_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'               => [
                'string',
                'required',
            ],
            'collection_books.*' => [
                'integer',
            ],
            'collection_books'   => [
                'array',
            ],
            'image'              => [
                'string',
                'nullable',
            ],
            'discount'           => [
                'string',
                'nullable',
            ],
            'weight'             => [
                'string',
                'nullable',
            ],
            'sku'                => [
                'string',
                'nullable',
            ],
            'slug'               => [
                'string',
                'nullable',
            ],
            'meta_keywords'      => [
                'string',
                'nullable',
            ],
            'meta_description'   => [
                'string',
                'nullable',
            ],
        ];
    }
}
