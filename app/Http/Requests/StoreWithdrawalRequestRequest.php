<?php

namespace App\Http\Requests;

use App\WithdrawalRequest;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreWithdrawalRequestRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('withdrawal_request_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'user_id'                   => [
                'required',
                'integer',
            ],
            'amount'                    => [
                'required',
            ],
            'request_date'              => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'approved_or_rejected_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}
