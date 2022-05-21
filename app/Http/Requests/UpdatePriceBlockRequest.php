<?php

namespace App\Http\Requests;

use App\Models\PriceBlock;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePriceBlockRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('price_block_edit');
    }

    public function rules()
    {
        return [
            'block_title' => [
                'string',
                'nullable',
            ],
            'set_order'   => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
