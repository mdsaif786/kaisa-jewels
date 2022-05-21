<?php

namespace App\Http\Requests;

use App\VendorPackage;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateVendorPackageRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('vendor_package_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'package_name' => [
                'required',
            ],
            'no_of_days'   => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'no_of_course' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
