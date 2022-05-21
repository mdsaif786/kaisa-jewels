<?php

namespace App\Http\Requests;

use App\PaperQuiz;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdatePaperQuizRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('paper_quiz_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'paper_name'             => [
                'required',
            ],
            'published_date'         => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'expired_date'           => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'no_of_question'         => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'quiz_paper_questions.*' => [
                'integer',
            ],
            'quiz_paper_questions'   => [
                'array',
            ],
        ];
    }
}
