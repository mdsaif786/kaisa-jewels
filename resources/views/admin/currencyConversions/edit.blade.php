@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.currencyConversion.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.currency-conversions.update", [$currencyConversion->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="country_id">{{ trans('cruds.currencyConversion.fields.country') }}</label>
                <select class="form-control select2 {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country_id" id="country_id" required>
                    @foreach($countries as $id => $country)
                        <option value="{{ $id }}" {{ (old('country_id') ? old('country_id') : $currencyConversion->country->id ?? '') == $id ? 'selected' : '' }}>{{ $country }}</option>
                    @endforeach
                </select>
                @if($errors->has('country'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.currencyConversion.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="from_date">{{ trans('cruds.currencyConversion.fields.from_date') }}</label>
                <input class="form-control date {{ $errors->has('from_date') ? 'is-invalid' : '' }}" type="text" name="from_date" id="from_date" value="{{ old('from_date', $currencyConversion->from_date) }}" required>
                @if($errors->has('from_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('from_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.currencyConversion.fields.from_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="to_date">{{ trans('cruds.currencyConversion.fields.to_date') }}</label>
                <input class="form-control {{ $errors->has('to_date') ? 'is-invalid' : '' }}" type="text" name="to_date" id="to_date" value="{{ old('to_date', $currencyConversion->to_date) }}" required>
                @if($errors->has('to_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('to_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.currencyConversion.fields.to_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="rate">{{ trans('cruds.currencyConversion.fields.rate') }}</label>
                <input class="form-control {{ $errors->has('rate') ? 'is-invalid' : '' }}" type="number" name="rate" id="rate" value="{{ old('rate', $currencyConversion->rate) }}" step="0.01" required>
                @if($errors->has('rate'))
                    <div class="invalid-feedback">
                        {{ $errors->first('rate') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.currencyConversion.fields.rate_helper') }}</span>
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