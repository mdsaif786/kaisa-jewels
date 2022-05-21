<?php

namespace App\Http\Requests;

use App\Affiliate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreAffiliateRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('affiliate_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'date_added'    => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'approved_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}
