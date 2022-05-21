<?php

namespace App\Http\Requests;

use App\CourseWishList;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCourseWishListRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('course_wish_list_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:course_wish_lists,id',
        ];
    }
}
