<?php

namespace App\Http\Requests;

use App\VideoQuestionAnswer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyVideoQuestionAnswerRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('video_question_answer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:video_question_answers,id',
        ];
    }
}
