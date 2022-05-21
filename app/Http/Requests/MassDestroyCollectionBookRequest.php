<?php

namespace App\Http\Requests;

use App\Models\CollectionBook;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCollectionBookRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('collection_book_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:collection_books,id',
        ];
    }
}
