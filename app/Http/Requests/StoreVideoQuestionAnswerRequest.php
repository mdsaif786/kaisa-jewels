<?php

namespace App\Http\Requests;

use App\VideoQuestionAnswer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreVideoQuestionAnswerRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('video_question_answer_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [];
    }
}
