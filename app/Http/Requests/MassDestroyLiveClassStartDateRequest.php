<?php

namespace App\Http\Requests;

use App\LiveClassStartDate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyLiveClassStartDateRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('live_class_start_date_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:live_class_start_dates,id',
        ];
    }
}
