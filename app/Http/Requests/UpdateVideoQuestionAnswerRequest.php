<?php

namespace App\Http\Requests;

use App\VideoQuestionAnswer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateVideoQuestionAnswerRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('video_question_answer_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [];
    }
}
