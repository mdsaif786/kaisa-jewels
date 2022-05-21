<?php

namespace App\Http\Requests;

use App\Models\ContactUs;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreContactUsRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('contact_us_create');
    }

    public function rules()
    {
        return [
            'full_name' => [
                'string',
                'nullable',
            ],
            'email'     => [
                'string',
                'nullable',
            ],
            'phone'     => [
                'string',
                'nullable',
            ],
        ];
    }
}
