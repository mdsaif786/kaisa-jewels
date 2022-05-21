<?php

namespace App\Http\Requests;

use App\VideoQuestionAnswerReply;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreVideoQuestionAnswerReplyRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('video_question_answer_reply_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [];
    }
}
