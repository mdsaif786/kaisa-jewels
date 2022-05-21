@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.indiaShippingCharge.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.india-shipping-charges.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="pincode">{{ trans('cruds.indiaShippingCharge.fields.pincode') }}</label>
                <input class="form-control {{ $errors->has('pincode') ? 'is-invalid' : '' }}" type="text" name="pincode" id="pincode" value="{{ old('pincode', '') }}" required>
                @if($errors->has('pincode'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pincode') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.indiaShippingCharge.fields.pincode_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="circle_name">{{ trans('cruds.indiaShippingCharge.fields.circle_name') }}</label>
                <input class="form-control {{ $errors->has('circle_name') ? 'is-invalid' : '' }}" type="text" name="circle_name" id="circle_name" value="{{ old('circle_name', '') }}">
                @if($errors->has('circle_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('circle_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.indiaShippingCharge.fields.circle_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="taluk">{{ trans('cruds.indiaShippingCharge.fields.taluk') }}</label>
                <input class="form-control {{ $errors->has('taluk') ? 'is-invalid' : '' }}" type="text" name="taluk" id="taluk" value="{{ old('taluk', '') }}">
                @if($errors->has('taluk'))
                    <div class="invalid-feedback">
                        {{ $errors->first('taluk') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.indiaShippingCharge.fields.taluk_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="office_name">{{ trans('cruds.indiaShippingCharge.fields.office_name') }}</label>
                <input class="form-control {{ $errors->has('office_name') ? 'is-invalid' : '' }}" type="text" name="office_name" id="office_name" value="{{ old('office_name', '') }}">
                @if($errors->has('office_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('office_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.indiaShippingCharge.fields.office_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="district_name">{{ trans('cruds.indiaShippingCharge.fields.district_name') }}</label>
                <input class="form-control {{ $errors->has('district_name') ? 'is-invalid' : '' }}" type="text" name="district_name" id="district_name" value="{{ old('district_name', '') }}">
                @if($errors->has('district_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('district_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.indiaShippingCharge.fields.district_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="region_name">{{ trans('cruds.indiaShippingCharge.fields.region_name') }}</label>
                <input class="form-control {{ $errors->has('region_name') ? 'is-invalid' : '' }}" type="text" name="region_name" id="region_name" value="{{ old('region_name', '') }}">
                @if($errors->has('region_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('region_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.indiaShippingCharge.fields.region_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="hq_rate_per_kg">{{ trans('cruds.indiaShippingCharge.fields.hq_rate_per_kg') }}</label>
                <input class="form-control {{ $errors->has('hq_rate_per_kg') ? 'is-invalid' : '' }}" type="text" name="hq_rate_per_kg" id="hq_rate_per_kg" value="{{ old('hq_rate_per_kg', '') }}">
                @if($errors->has('hq_rate_per_kg'))
                    <div class="invalid-feedback">
                        {{ $errors->first('hq_rate_per_kg') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.indiaShippingCharge.fields.hq_rate_per_kg_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="other_rate">{{ trans('cruds.indiaShippingCharge.fields.other_rate') }}</label>
                <input class="form-control {{ $errors->has('other_rate') ? 'is-invalid' : '' }}" type="text" name="other_rate" id="other_rate" value="{{ old('other_rate', '') }}">
                @if($errors->has('other_rate'))
                    <div class="invalid-feedback">
                        {{ $errors->first('other_rate') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.indiaShippingCharge.fields.other_rate_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="cod_rate">{{ trans('cruds.indiaShippingCharge.fields.cod_rate') }}</label>
                <input class="form-control {{ $errors->has('cod_rate') ? 'is-invalid' : '' }}" type="text" name="cod_rate" id="cod_rate" value="{{ old('cod_rate', '') }}">
                @if($errors->has('cod_rate'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cod_rate') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.indiaShippingCharge.fields.cod_rate_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="total_amount">{{ trans('cruds.indiaShippingCharge.fields.total_amount') }}</label>
                <input class="form-control {{ $errors->has('total_amount') ? 'is-invalid' : '' }}" type="text" name="total_amount" id="total_amount" value="{{ old('total_amount', '') }}">
                @if($errors->has('total_amount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('total_amount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.indiaShippingCharge.fields.total_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.indiaShippingCharge.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\IndiaShippingCharge::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', '1') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.indiaShippingCharge.fields.status_helper') }}</span>
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