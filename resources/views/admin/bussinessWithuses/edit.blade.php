@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.bussinessWithUs.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.bussiness-withuses.update", [$bussinessWithUs->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="full_name">{{ trans('cruds.bussinessWithUs.fields.full_name') }}</label>
                <input class="form-control {{ $errors->has('full_name') ? 'is-invalid' : '' }}" type="text" name="full_name" id="full_name" value="{{ old('full_name', $bussinessWithUs->full_name) }}">
                @if($errors->has('full_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('full_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.bussinessWithUs.fields.full_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.bussinessWithUs.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email', $bussinessWithUs->email) }}" required>
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.bussinessWithUs.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="mobile">{{ trans('cruds.bussinessWithUs.fields.mobile') }}</label>
                <input class="form-control {{ $errors->has('mobile') ? 'is-invalid' : '' }}" type="text" name="mobile" id="mobile" value="{{ old('mobile', $bussinessWithUs->mobile) }}">
                @if($errors->has('mobile'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mobile') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.bussinessWithUs.fields.mobile_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="message">{{ trans('cruds.bussinessWithUs.fields.message') }}</label>
                <input class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}" type="text" name="message" id="message" value="{{ old('message', $bussinessWithUs->message) }}">
                @if($errors->has('message'))
                    <div class="invalid-feedback">
                        {{ $errors->first('message') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.bussinessWithUs.fields.message_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="city_name">{{ trans('cruds.bussinessWithUs.fields.city_name') }}</label>
                <input class="form-control {{ $errors->has('city_name') ? 'is-invalid' : '' }}" type="text" name="city_name" id="city_name" value="{{ old('city_name', $bussinessWithUs->city_name) }}">
                @if($errors->has('city_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('city_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.bussinessWithUs.fields.city_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_name">{{ trans('cruds.bussinessWithUs.fields.company_name') }}</label>
                <input class="form-control {{ $errors->has('company_name') ? 'is-invalid' : '' }}" type="text" name="company_name" id="company_name" value="{{ old('company_name', $bussinessWithUs->company_name) }}">
                @if($errors->has('company_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.bussinessWithUs.fields.company_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="status">{{ trans('cruds.bussinessWithUs.fields.status') }}</label>
                <input class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" type="text" name="status" id="status" value="{{ old('status', $bussinessWithUs->status) }}">
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.bussinessWithUs.fields.status_helper') }}</span>
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