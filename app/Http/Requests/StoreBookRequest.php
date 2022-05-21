<?php

namespace App\Http\Requests;

use App\Models\Book;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreBookRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('book_create');
    }

    public function rules()
    {
        return [
            'name'                        => [
                'string',
                'required',
            ],
            'image'                       => [
                'file',
                'nullable',
            ],
            'discount'                    => [
                'string',
                'nullable',
            ],
            'isbn'                        => [
                'string',
                'nullable',
            ],
            'isbn_10'                     => [
                'string',
                'nullable',
            ],
            'isbn_30'                     => [
                'string',
                'nullable',
            ],
            'weight'                      => [
                'string',
                'nullable',
            ],
            'sku'                         => [
                'string',
                'nullable',
            ],
            'dimensions'                  => [
                'string',
                'nullable',
            ],
            'no_of_pages'                 => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'book_type'                   => [
                'required',
            ],
            'binding_types.*'             => [
                'integer',
            ],
            'binding_types'               => [
                'array',
            ],
            'publication_city_or_country' => [
                'string',
                'nullable',
            ],
            'publication_date'            => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'no_of_qty_for_discount'      => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'coupon_code'                 => [
                'string',
                'nullable',
            ],
            'slug'                        => [
                'string',
                'nullable',
            ],
            'meta_keywords'               => [
                'string',
                'nullable',
            ],
            'meta_description'            => [
                'string',
                'nullable',
            ],
            'quantity'=>['required']
        ];
    }
}
