<?php

namespace App\Http\Requests;

use App\Models\Language;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreLanguageRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('language_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'min:1',
                'max:10',
                'required',
            ],
        ];
    }
}
