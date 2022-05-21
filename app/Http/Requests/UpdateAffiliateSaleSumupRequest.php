<?php

namespace App\Http\Requests;

use App\AffiliateSaleSumup;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateAffiliateSaleSumupRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('affiliate_sale_sumup_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'from_date'     => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'to_date'       => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'no_of_sale'    => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'next_due_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}
