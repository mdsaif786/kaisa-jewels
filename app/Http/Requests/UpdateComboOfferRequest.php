<?php

namespace App\Http\Requests;

use App\Models\ComboOffer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateComboOfferRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('combo_offer_edit');
    }

    public function rules()
    {
        return [
            'offer_title'         => [
                'string',
                'required',
            ],
            'discount_percentage' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'combo_offer_books.*' => [
                'integer',
            ],
            'combo_offer_books'   => [
                'array',
            ],
        ];
    }
}
