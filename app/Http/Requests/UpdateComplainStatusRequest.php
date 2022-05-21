<?php

namespace App\Http\Requests;

use App\ComplainStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateComplainStatusRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('complain_status_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
                'unique:complain_statuses,name,' . request()->route('complain_status')->id,
            ],
        ];
    }
}
