<?php

namespace App\Http\Requests;

use App\AddToCartType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreAddToCartTypeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('add_to_cart_type_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

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
