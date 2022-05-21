<?php

namespace App\Http\Requests;

use App\BankDetail;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreBankDetailRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('bank_detail_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'bank_id'        => [
                'required',
                'integer',
            ],
            'account_number' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'ifsc_code'      => [
                'required',
            ],
        ];
    }
}
