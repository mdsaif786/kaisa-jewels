<?php

namespace App\Http\Requests;

use App\QuestionAnswer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreQuestionAnswerRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('question_answer_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [];
    }
}
