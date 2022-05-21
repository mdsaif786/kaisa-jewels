@extends('layouts.admin')
@section('title','Add Slider')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.slider.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.sliders.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="slider_name">{{ trans('cruds.slider.fields.slider_name') }}</label>
                <input class="form-control {{ $errors->has('slider_name') ? 'is-invalid' : '' }}" type="text" name="slider_name" id="slider_name" value="{{ old('slider_name', '') }}">
                @if($errors->has('slider_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('slider_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.slider.fields.slider_name_helper') }}</span>
            </div>
            <div class="form-group">

                <div class="custom-file">
                <input type="file" name="slider_image" class="custom-file-input" id="slider_image">
                <label class="custom-file-label" for="slider_image">Upload Slider Image</label>
              </div>

                
            </div>
            <div class="form-group">
                <label for="target_url">{{ trans('cruds.slider.fields.target_url') }}</label>
                <input class="form-control {{ $errors->has('target_url') ? 'is-invalid' : '' }}" type="text" name="target_url" id="target_url" value="{{ old('target_url', '') }}">
                @if($errors->has('target_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('target_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.slider.fields.target_url_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.slider.fields.slider_position') }}</label>
                <select class="form-control {{ $errors->has('slider_position') ? 'is-invalid' : '' }}" name="slider_position" id="slider_position">
                    <option value disabled {{ old('slider_position', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Slider::SLIDER_POSITION_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('slider_position', '1') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('slider_position'))
                    <div class="invalid-feedback">
                        {{ $errors->first('slider_position') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.slider.fields.slider_position_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.slider.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Slider::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', '1') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.slider.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
