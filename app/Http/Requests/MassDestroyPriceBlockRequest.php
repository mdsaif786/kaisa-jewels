<?php

namespace App\Http\Requests;

use App\Models\PriceBlock;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPriceBlockRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('price_block_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:price_blocks,id',
        ];
    }
}
