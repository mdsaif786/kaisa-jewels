<?php

namespace App\Http\Requests;

use App\ExamCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateExamCategoryRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('exam_category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'       => [
                'required',
            ],
            'sort_order' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
