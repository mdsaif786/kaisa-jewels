<?php

namespace App\Http\Requests;

use App\VendorPackage;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyVendorPackageRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('vendor_package_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:vendor_packages,id',
        ];
    }
}
