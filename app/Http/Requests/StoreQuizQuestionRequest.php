<?php

namespace App\Http\Requests;

use App\QuizQuestion;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreQuizQuestionRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('quiz_question_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

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
