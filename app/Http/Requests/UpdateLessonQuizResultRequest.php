<?php

namespace App\Http\Requests;

use App\LessonQuizResult;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateLessonQuizResultRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('lesson_quiz_result_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'no_of_question'       => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'attempted_question'   => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'unattempted_question' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'correct_attempted'    => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'user'                 => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
