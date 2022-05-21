<?php

namespace App\Http\Requests;

use App\WithdrawalStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateWithdrawalStatusRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('withdrawal_status_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
                'unique:withdrawal_statuses,name,' . request()->route('withdrawal_status')->id,
            ],
        ];
    }
}
