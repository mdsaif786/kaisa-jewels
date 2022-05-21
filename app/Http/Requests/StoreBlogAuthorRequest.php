<?php

namespace App\Http\Requests;

use App\BlogAuthor;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreBlogAuthorRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('blog_author_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
            ],
        ];
    }
}
