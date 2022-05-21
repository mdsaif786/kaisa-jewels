<?php

namespace App\Http\Requests;

use App\CourseWishList;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateCourseWishListRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('course_wish_list_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'video_course_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
