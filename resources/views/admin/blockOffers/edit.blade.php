@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.blockOffer.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.block-offers.update", [$blockOffer->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.blockOffer.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $blockOffer->title) }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.blockOffer.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.blockOffer.fields.offer_type') }}</label>
                <select class="form-control {{ $errors->has('offer_type') ? 'is-invalid' : '' }}" name="offer_type" id="offer_type" required>
                    <option value disabled {{ old('offer_type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\BlockOffer::OFFER_TYPE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('offer_type', $blockOffer->offer_type) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('offer_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('offer_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.blockOffer.fields.offer_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="general_discount">{{ trans('cruds.blockOffer.fields.general_discount') }}</label>
                <input class="form-control {{ $errors->has('general_discount') ? 'is-invalid' : '' }}" type="number" name="general_discount" id="general_discount" value="{{ old('general_discount', $blockOffer->general_discount) }}" step="1">
                @if($errors->has('general_discount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('general_discount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.blockOffer.fields.general_discount_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.blockOffer.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\BlockOffer::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', $blockOffer->status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.blockOffer.fields.status_helper') }}</span>
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