<?php

namespace App\Http\Requests;

use App\Models\BlockOffer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateBlockOfferRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('block_offer_edit');
    }

    public function rules()
    {
        return [
            'title'            => [
                'string',
                'required',
            ],
            'offer_type'       => [
                'required',
            ],
            'general_discount' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
