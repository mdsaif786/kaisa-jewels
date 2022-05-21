<?php

namespace App\Http\Requests;

use App\LessonQuizAnswer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateLessonQuizAnswerRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('lesson_quiz_answer_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [];
    }
}
