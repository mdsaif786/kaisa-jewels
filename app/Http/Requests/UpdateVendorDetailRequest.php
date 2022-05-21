<?php

namespace App\Http\Requests;

use App\VendorDetail;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateVendorDetailRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('vendor_detail_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'organization_name' => [
                'required',
            ],
        ];
    }
}
