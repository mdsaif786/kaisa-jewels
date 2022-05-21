@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.availableCurrency.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.available-currencies.update", [$availableCurrency->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="country_name">{{ trans('cruds.availableCurrency.fields.country_name') }}</label>
                <input class="form-control {{ $errors->has('country_name') ? 'is-invalid' : '' }}" type="text" name="country_name" id="country_name" value="{{ old('country_name', $availableCurrency->country_name) }}" required>
                @if($errors->has('country_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.availableCurrency.fields.country_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="currency_symbol">{{ trans('cruds.availableCurrency.fields.currency_symbol') }}</label>
                <input class="form-control {{ $errors->has('currency_symbol') ? 'is-invalid' : '' }}" type="text" name="currency_symbol" id="currency_symbol" value="{{ old('currency_symbol', $availableCurrency->currency_symbol) }}">
                @if($errors->has('currency_symbol'))
                    <div class="invalid-feedback">
                        {{ $errors->first('currency_symbol') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.availableCurrency.fields.currency_symbol_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="short_name">{{ trans('cruds.availableCurrency.fields.short_name') }}</label>
                <input class="form-control {{ $errors->has('short_name') ? 'is-invalid' : '' }}" type="text" name="short_name" id="short_name" value="{{ old('short_name', $availableCurrency->short_name) }}" required>
                @if($errors->has('short_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('short_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.availableCurrency.fields.short_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.availableCurrency.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\AvailableCurrency::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', $availableCurrency->status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.availableCurrency.fields.status_helper') }}</span>
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