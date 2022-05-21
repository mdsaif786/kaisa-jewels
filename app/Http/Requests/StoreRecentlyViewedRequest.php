<?php

namespace App\Http\Requests;

use App\Models\RecentlyViewed;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreRecentlyViewedRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('recently_viewed_create');
    }

    public function rules()
    {
        return [
            'date_time'   => [
                'string',
                'nullable',
            ],
            'url'         => [
                'string',
                'nullable',
            ],
            'ip'          => [
                'string',
                'nullable',
            ],
            'no_of_times' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
