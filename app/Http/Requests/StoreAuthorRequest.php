<?php

namespace App\Http\Requests;

use App\Models\Author;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAuthorRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('author_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'          => [
                'string',
                'required',
            ],
            'short_caption' => [
                'string',
                'nullable',
            ],
            'profile_image' => [
                'string',
                'nullable',
            ],
        ];
    }
}
