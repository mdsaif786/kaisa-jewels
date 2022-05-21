<?php

namespace App\Http\Requests;

use App\Models\WishList;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreWishListRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('wish_list_create');
    }

    public function rules()
    {
        return [
            'ip' => [
                'string',
                'max:45',
                'nullable',
            ],
        ];
    }
}
