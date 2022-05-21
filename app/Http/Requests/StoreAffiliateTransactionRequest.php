<?php

namespace App\Http\Requests;

use App\AffiliateTransaction;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreAffiliateTransactionRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('affiliate_transaction_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [];
    }
}
