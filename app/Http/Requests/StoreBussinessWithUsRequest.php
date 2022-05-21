<?php

namespace App\Http\Requests;

use App\Models\BussinessWithUs;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreBussinessWithUsRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('bussiness_with_us_create');
    }

    public function rules()
    {
        return [
            'full_name'    => [
                'string',
                'nullable',
            ],
            'email'        => [
                'required',
            ],
            'mobile'       => [
                'string',
                'nullable',
            ],
            'message'      => [
                'string',
                'nullable',
            ],
            'city_name'    => [
                'string',
                'nullable',
            ],
            'company_name' => [
                'string',
                'nullable',
            ],
            'status'       => [
                'string',
                'nullable',
            ],
        ];
    }
}
