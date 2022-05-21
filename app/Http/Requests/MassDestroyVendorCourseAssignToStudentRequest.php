<?php

namespace App\Http\Requests;

use App\VendorCourseAssignToStudent;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyVendorCourseAssignToStudentRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('vendor_course_assign_to_student_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:vendor_course_assign_to_students,id',
        ];
    }
}
