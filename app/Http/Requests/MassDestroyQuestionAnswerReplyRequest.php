<?php

namespace App\Http\Requests;

use App\QuestionAnswerReply;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyQuestionAnswerReplyRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('question_answer_reply_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:question_answer_replies,id',
        ];
    }
}
