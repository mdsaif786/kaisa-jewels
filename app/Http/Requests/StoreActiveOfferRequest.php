<?php

namespace App\Http\Requests;

use App\Models\ActiveOffer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreActiveOfferRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('active_offer_create');
    }

    public function rules()
    {
        return [
            'offer_title'      => [
                'string',
                'required',
            ],
            'banner_image'     => [
                'string',
                'nullable',
            ],
            'discount_bracket' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
