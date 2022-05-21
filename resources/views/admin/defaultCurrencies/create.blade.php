@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.defaultCurrency.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.default-currencies.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="country_id">{{ trans('cruds.defaultCurrency.fields.country') }}</label>
                <select class="form-control select2 {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country_id" id="country_id" required>
                    @foreach($countries as $id => $country)
                        <option value="{{ $id }}" {{ old('country_id') == $id ? 'selected' : '' }}>{{ $country }}</option>
                    @endforeach
                </select>
                @if($errors->has('country'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.defaultCurrency.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="rate">{{ trans('cruds.defaultCurrency.fields.rate') }}</label>
                <input class="form-control {{ $errors->has('rate') ? 'is-invalid' : '' }}" type="number" name="rate" id="rate" value="{{ old('rate', '') }}" step="0.01">
                @if($errors->has('rate'))
                    <div class="invalid-feedback">
                        {{ $errors->first('rate') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.defaultCurrency.fields.rate_helper') }}</span>
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