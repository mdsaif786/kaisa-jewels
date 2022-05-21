<?php

namespace App\Http\Requests;

use App\LiveClassReview;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreLiveClassReviewRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('live_class_review_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'live_class_id' => [
                'required',
                'integer',
            ],
            'review_point'  => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
