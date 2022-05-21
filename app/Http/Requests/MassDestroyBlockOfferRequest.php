<?php

namespace App\Http\Requests;

use App\Models\BlockOffer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyBlockOfferRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('block_offer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:block_offers,id',
        ];
    }
}
