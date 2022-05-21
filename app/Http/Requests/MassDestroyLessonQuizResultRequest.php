<?php

namespace App\Http\Requests;

use App\LessonQuizResult;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyLessonQuizResultRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('lesson_quiz_result_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:lesson_quiz_results,id',
        ];
    }
}
