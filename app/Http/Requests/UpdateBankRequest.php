<?php

namespace App\Http\Requests;

use App\Bank;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateBankRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('bank_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
                'unique:banks,name,' . request()->route('bank')->id,
            ],
        ];
    }
}
