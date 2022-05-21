@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.loginIp.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.login-ips.update", [$loginIp->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="user">{{ trans('cruds.loginIp.fields.user') }}</label>
                <input class="form-control {{ $errors->has('user') ? 'is-invalid' : '' }}" type="text" name="user" id="user" value="{{ old('user', $loginIp->user) }}">
                @if($errors->has('user'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.loginIp.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ip">{{ trans('cruds.loginIp.fields.ip') }}</label>
                <input class="form-control {{ $errors->has('ip') ? 'is-invalid' : '' }}" type="text" name="ip" id="ip" value="{{ old('ip', $loginIp->ip) }}">
                @if($errors->has('ip'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ip') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.loginIp.fields.ip_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.loginIp.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\LoginIp::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', $loginIp->status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.loginIp.fields.status_helper') }}</span>
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