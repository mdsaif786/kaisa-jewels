<?php

namespace App\Http\Requests;

use App\ComplaintType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreComplaintTypeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('complaint_type_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
                'unique:complaint_types',
            ],
        ];
    }
}
