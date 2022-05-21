<?php

namespace App\Http\Requests;

use App\LessonQuiz;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyLessonQuizRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('lesson_quiz_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:lesson_quizzes,id',
        ];
    }
}
