<?php

namespace App\Http\Requests;

use App\QuizResult;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreQuizResultRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('quiz_result_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'quiz_paper_id'        => [
                'required',
                'integer',
            ],
            'no_of_question'       => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'attempted_question'   => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'unattempted_question' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'correct_attempted'    => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'user'                 => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
