<?php

namespace App\Http\Requests;

use App\CertificateGenerate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCertificateGenerateRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('certificate_generate_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:certificate_generates,id',
        ];
    }
}
