<?php

namespace App\Http\Requests;

use App\Models\BookReview;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreBookReviewRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('book_review_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'email'        => [
                'string',
                'nullable',
            ],
            'review_point' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
