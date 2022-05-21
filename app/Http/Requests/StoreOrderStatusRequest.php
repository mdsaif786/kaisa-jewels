<?php

namespace App\Http\Requests;

use App\Models\OrderStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreOrderStatusRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('order_status_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'max:15',
                'required',
                'unique:order_statuses',
            ],
            'name'  => [
                'string',
                'required',
            ],
        ];
    }
}
