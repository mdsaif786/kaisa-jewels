<?php

namespace App\Http\Requests;

use App\StudentGroup;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreStudentGroupRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('student_group_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'group_name' => [
                'max:32',
                'required',
            ],
        ];
    }
}
