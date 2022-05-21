<?php

namespace App\Http\Requests;

use App\CertificateGenerate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateCertificateGenerateRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('certificate_generate_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
                'unique:certificate_generates,name,' . request()->route('certificate_generate')->id,
            ],
        ];
    }
}
