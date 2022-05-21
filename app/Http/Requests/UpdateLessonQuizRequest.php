<?php

namespace App\Http\Requests;

use App\LessonQuiz;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateLessonQuizRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('lesson_quiz_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'lesson_id' => [
                'required',
                'integer',
            ],
            'question'  => [
                'required',
            ],
            'answer'    => [
                'required',
            ],
        ];
    }
}
