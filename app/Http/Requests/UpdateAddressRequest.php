<?php

namespace App\Http\Requests;

use App\Models\Address;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAddressRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('address_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'            => [
                'string',
                'max:100',
                'required',
            ],
            'phone'           => [
                'string',
                'max:20',
                'required',
            ],
            'alternate_phone' => [
                'string',
                'max:20',
                'nullable',
            ],
            'address_1'       => [
                'required',
            ],
            'pincode'         => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'city'            => [
                'string',
                'required',
            ],
            'additional_note' => [
                'string',
                'nullable',
            ],
        ];
    }
}
