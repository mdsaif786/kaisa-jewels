@extends('layouts.admin')
@section('title','Show Slider')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.slider.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.sliders.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.id') }}
                        </th>
                        <td>
                            {{ $slider->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.slider_name') }}
                        </th>
                        <td>
                            {{ $slider->slider_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.slider_image') }}
                        </th>
                        <td>
                           <img src="{{ $slider->slider_image }}" width="100px" height="100px">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.target_url') }}
                        </th>
                        <td>
                            {{ $slider->target_url }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.slider_position') }}
                        </th>
                        <td>
                            {{ App\Models\Slider::SLIDER_POSITION_SELECT[$slider->slider_position] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\Slider::STATUS_SELECT[$slider->status] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.sliders.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
