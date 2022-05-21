<?php

namespace App\Http\Requests;

use App\SkillLevel;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateSkillLevelRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('skill_level_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
                'unique:skill_levels,name,' . request()->route('skill_level')->id,
            ],
        ];
    }
}
