<?php

namespace App\Http\Requests;

use App\LiveClassStartDate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateLiveClassStartDateRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('live_class_start_date_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'class_start_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}
