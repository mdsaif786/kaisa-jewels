<?php

namespace App\Http\Requests;

use App\Models\StockStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreStockStatusRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('stock_status_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:stock_statuses',
            ],
        ];
    }
}
