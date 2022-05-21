@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.country.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.countries.update", [$country->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.country.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $country->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.country.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="short_code">{{ trans('cruds.country.fields.short_code') }}</label>
                <input class="form-control {{ $errors->has('short_code') ? 'is-invalid' : '' }}" type="text" name="short_code" id="short_code" value="{{ old('short_code', $country->short_code) }}" required>
                @if($errors->has('short_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('short_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.country.fields.short_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.country.fields.shipping_allow') }}</label>
                <select class="form-control {{ $errors->has('shipping_allow') ? 'is-invalid' : '' }}" name="shipping_allow" id="shipping_allow">
                    <option value disabled {{ old('shipping_allow', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Country::SHIPPING_ALLOW_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('shipping_allow', $country->shipping_allow) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('shipping_allow'))
                    <div class="invalid-feedback">
                        {{ $errors->first('shipping_allow') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.country.fields.shipping_allow_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="shipping_charge">{{ trans('cruds.country.fields.shipping_charge') }}</label>
                <input class="form-control {{ $errors->has('shipping_charge') ? 'is-invalid' : '' }}" type="text" name="shipping_charge" id="shipping_charge" value="{{ old('shipping_charge', $country->shipping_charge) }}">
                @if($errors->has('shipping_charge'))
                    <div class="invalid-feedback">
                        {{ $errors->first('shipping_charge') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.country.fields.shipping_charge_helper') }}</span>
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