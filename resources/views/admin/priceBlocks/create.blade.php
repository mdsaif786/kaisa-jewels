@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.priceBlock.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.price-blocks.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="block_title">{{ trans('cruds.priceBlock.fields.block_title') }}</label>
                <input class="form-control {{ $errors->has('block_title') ? 'is-invalid' : '' }}" type="text" name="block_title" id="block_title" value="{{ old('block_title', '') }}">
                @if($errors->has('block_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('block_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.priceBlock.fields.block_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.priceBlock.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\PriceBlock::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', '1') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.priceBlock.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="set_order">{{ trans('cruds.priceBlock.fields.set_order') }}</label>
                <input class="form-control {{ $errors->has('set_order') ? 'is-invalid' : '' }}" type="number" name="set_order" id="set_order" value="{{ old('set_order', '0') }}" step="1">
                @if($errors->has('set_order'))
                    <div class="invalid-feedback">
                        {{ $errors->first('set_order') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.priceBlock.fields.set_order_helper') }}</span>
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