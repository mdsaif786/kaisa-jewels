<?php

namespace App\Http\Requests;

use App\Models\ComboOffer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyComboOfferRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('combo_offer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:combo_offers,id',
        ];
    }
}
