<?php

namespace App\Http\Requests;

use App\Models\Publisher;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePublisherRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('publisher_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'   => [
                'string',
                'required',
                'unique:publishers',
            ],
            'status' => [
                'required',
            ],
        ];
    }
}
