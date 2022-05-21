<?php

namespace App\Http\Requests;

use App\SkillLevel;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroySkillLevelRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('skill_level_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:skill_levels,id',
        ];
    }
}
