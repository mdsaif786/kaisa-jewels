<?php

namespace App\Http\Requests;

use App\RecentView;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateRecentViewRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('recent_view_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'view_date'              => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'no_of_time_within_hour' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
