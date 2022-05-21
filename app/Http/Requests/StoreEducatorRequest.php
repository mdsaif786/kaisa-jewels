<?php

namespace App\Http\Requests;

use App\Educator;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreEducatorRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('educator_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'website_link'               => [
                'max:50',
            ],
            'watch_time_last_thirty_day' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'no_of_followers'            => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
