@extends('layouts.admin')
@section('title','Add User')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.user.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.users.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.user.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.user.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}" required>
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="password">{{ trans('cruds.user.fields.password') }}</label>
                <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" name="password" id="password" required>
                @if($errors->has('password'))
                    <div class="invalid-feedback">
                        {{ $errors->first('password') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.password_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="roles">{{ trans('cruds.user.fields.roles') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('roles') ? 'is-invalid' : '' }}" name="roles[]" id="roles" multiple required>
                    @foreach($roles as $id => $roles)
                        <option value="{{ $id }}" {{ in_array($id, old('roles', [])) ? 'selected' : '' }}>{{ $roles }}</option>
                    @endforeach
                </select>
                @if($errors->has('roles'))
                    <div class="invalid-feedback">
                        {{ $errors->first('roles') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.roles_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.user.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\User::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', '1') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.status_helper') }}</span>
            </div>
           {{--  <div class="form-group">
                <label for="profile_photo">{{ trans('cruds.user.fields.profile_photo') }}</label>
                <input class="form-control {{ $errors->has('profile_photo') ? 'is-invalid' : '' }}" type="text" name="profile_photo" id="profile_photo" value="{{ old('profile_photo', '') }}">
                @if($errors->has('profile_photo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('profile_photo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.profile_photo_helper') }}</span>
            </div> --}}
            {{-- <div class="form-group">
                <label for="default_address">{{ trans('cruds.user.fields.default_address') }}</label>
                <input class="form-control {{ $errors->has('default_address') ? 'is-invalid' : '' }}" type="number" name="default_address" id="default_address" value="{{ old('default_address', '') }}" step="1">
                @if($errors->has('default_address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('default_address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.default_address_helper') }}</span>
            </div> --}}
            <div class="form-group">
                <label for="phone">{{ trans('cruds.user.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', '') }}">
                @if($errors->has('phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.phone_helper') }}</span>
            </div>
            {{-- <div class="form-group">
                <label>{{ trans('cruds.user.fields.is_online') }}</label>
                <select class="form-control {{ $errors->has('is_online') ? 'is-invalid' : '' }}" name="is_online" id="is_online">
                    <option value disabled {{ old('is_online', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\User::IS_ONLINE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('is_online', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('is_online'))
                    <div class="invalid-feedback">
                        {{ $errors->first('is_online') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.is_online_helper') }}</span>
            </div> --}}
            {{-- <div class="form-group">
                <label for="country_id">{{ trans('cruds.user.fields.country') }}</label>
                <select class="form-control select2 {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country_id" id="country_id">
                    @foreach($countries as $id => $country)
                        <option value="{{ $id }}" {{ old('country_id') == $id ? 'selected' : '' }}>{{ $country }}</option>
                    @endforeach
                </select>
                @if($errors->has('country'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.country_helper') }}</span>
            </div> --}}
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
