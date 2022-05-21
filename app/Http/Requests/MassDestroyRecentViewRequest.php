<?php

namespace App\Http\Requests;

use App\RecentView;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyRecentViewRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('recent_view_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:recent_views,id',
        ];
    }
}
