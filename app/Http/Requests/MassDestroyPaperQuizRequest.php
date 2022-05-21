<?php

namespace App\Http\Requests;

use App\PaperQuiz;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPaperQuizRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('paper_quiz_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:paper_quizzes,id',
        ];
    }
}
