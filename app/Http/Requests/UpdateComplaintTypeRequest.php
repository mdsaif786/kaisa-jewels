<?php

namespace App\Http\Requests;

use App\ComplaintType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateComplaintTypeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('complaint_type_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
                'unique:complaint_types,name,' . request()->route('complaint_type')->id,
            ],
        ];
    }
}
