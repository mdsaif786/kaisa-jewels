<?php

namespace App\Http\Requests;

use App\Models\Publisher;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePublisherRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('publisher_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'   => [
                'string',
                'required',
                'unique:publishers,name,' . request()->route('publisher')->id,
            ],
            'status' => [
                'required',
            ],
        ];
    }
}
