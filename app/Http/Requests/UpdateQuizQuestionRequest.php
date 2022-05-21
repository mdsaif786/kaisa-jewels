<?php

namespace App\Http\Requests;

use App\QuizQuestion;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateQuizQuestionRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('quiz_question_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'question' => [
                'required',
            ],
        ];
    }
}
