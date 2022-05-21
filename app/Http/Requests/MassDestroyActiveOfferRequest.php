<?php

namespace App\Http\Requests;

use App\Models\ActiveOffer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyActiveOfferRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('active_offer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:active_offers,id',
        ];
    }
}
