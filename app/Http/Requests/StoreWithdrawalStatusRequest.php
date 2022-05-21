<?php

namespace App\Http\Requests;

use App\WithdrawalStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreWithdrawalStatusRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('withdrawal_status_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
                'unique:withdrawal_statuses',
            ],
        ];
    }
}
