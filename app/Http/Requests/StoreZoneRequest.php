<?php

namespace App\Http\Requests;

use App\Models\Zone;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreZoneRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('zone_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'max:50',
                'required',
            ],
            'code' => [
                'string',
                'max:10',
                'nullable',
            ],
        ];
    }
}
