@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.activeOffer.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.active-offers.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="offer_title">{{ trans('cruds.activeOffer.fields.offer_title') }}</label>
                <input class="form-control {{ $errors->has('offer_title') ? 'is-invalid' : '' }}" type="text" name="offer_title" id="offer_title" value="{{ old('offer_title', '') }}" required>
                @if($errors->has('offer_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('offer_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.activeOffer.fields.offer_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="banner_image">{{ trans('cruds.activeOffer.fields.banner_image') }}</label>
                <input class="form-control {{ $errors->has('banner_image') ? 'is-invalid' : '' }}" type="text" name="banner_image" id="banner_image" value="{{ old('banner_image', '') }}">
                @if($errors->has('banner_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('banner_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.activeOffer.fields.banner_image_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.activeOffer.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\ActiveOffer::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', '1') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.activeOffer.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="discount_bracket">{{ trans('cruds.activeOffer.fields.discount_bracket') }}</label>
                <input class="form-control {{ $errors->has('discount_bracket') ? 'is-invalid' : '' }}" type="number" name="discount_bracket" id="discount_bracket" value="{{ old('discount_bracket', '') }}" step="1">
                @if($errors->has('discount_bracket'))
                    <div class="invalid-feedback">
                        {{ $errors->first('discount_bracket') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.activeOffer.fields.discount_bracket_helper') }}</span>
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