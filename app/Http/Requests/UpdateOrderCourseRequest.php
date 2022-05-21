<?php

namespace App\Http\Requests;

use App\OrderCourse;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateOrderCourseRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('order_course_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'quantity'     => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'price'        => [
                'required',
            ],
            'total_amount' => [
                'required',
            ],
        ];
    }
}
