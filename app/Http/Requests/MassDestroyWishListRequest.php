<?php

namespace App\Http\Requests;

use App\Models\WishList;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyWishListRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('wish_list_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:wish_lists,id',
        ];
    }
}
