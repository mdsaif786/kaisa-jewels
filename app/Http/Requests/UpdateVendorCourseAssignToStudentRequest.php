<?php

namespace App\Http\Requests;

use App\VendorCourseAssignToStudent;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateVendorCourseAssignToStudentRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('vendor_course_assign_to_student_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [];
    }
}
