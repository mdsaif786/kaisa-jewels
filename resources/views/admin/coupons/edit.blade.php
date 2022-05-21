@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.coupon.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.coupons.update", [$coupon->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="coupon_name">{{ trans('cruds.coupon.fields.coupon_name') }}</label>
                <input class="form-control {{ $errors->has('coupon_name') ? 'is-invalid' : '' }}" type="text" name="coupon_name" id="coupon_name" value="{{ old('coupon_name', $coupon->coupon_name) }}" required>
                @if($errors->has('coupon_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('coupon_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.coupon.fields.coupon_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="coupon_code">{{ trans('cruds.coupon.fields.coupon_code') }}</label>
                <input class="form-control {{ $errors->has('coupon_code') ? 'is-invalid' : '' }}" type="text" name="coupon_code" id="coupon_code" value="{{ old('coupon_code', $coupon->coupon_code) }}" required>
                @if($errors->has('coupon_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('coupon_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.coupon.fields.coupon_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="discount">{{ trans('cruds.coupon.fields.discount') }}</label>
                <input class="form-control {{ $errors->has('discount') ? 'is-invalid' : '' }}" type="number" name="discount" id="discount" value="{{ old('discount', $coupon->discount) }}" step="0.01" required>
                @if($errors->has('discount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('discount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.coupon.fields.discount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="minimum_amount">{{ trans('cruds.coupon.fields.minimum_amount') }}</label>
                <input class="form-control {{ $errors->has('minimum_amount') ? 'is-invalid' : '' }}" type="number" name="minimum_amount" id="minimum_amount" value="{{ old('minimum_amount', $coupon->minimum_amount) }}" step="0.01">
                @if($errors->has('minimum_amount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('minimum_amount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.coupon.fields.minimum_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.coupon.fields.coupon_discount_type') }}</label>
                <select class="form-control {{ $errors->has('coupon_discount_type') ? 'is-invalid' : '' }}" name="coupon_discount_type" id="coupon_discount_type" required>
                    <option value disabled {{ old('coupon_discount_type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Coupon::COUPON_DISCOUNT_TYPE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('coupon_discount_type', $coupon->coupon_discount_type) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('coupon_discount_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('coupon_discount_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.coupon.fields.coupon_discount_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.coupon.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status" required>
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Coupon::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', $coupon->status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.coupon.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('is_flash_sale') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="is_flash_sale" value="0">
                    <input class="form-check-input" type="checkbox" name="is_flash_sale" id="is_flash_sale" value="1" {{ $coupon->is_flash_sale || old('is_flash_sale', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_flash_sale">{{ trans('cruds.coupon.fields.is_flash_sale') }}</label>
                </div>
                @if($errors->has('is_flash_sale'))
                    <div class="invalid-feedback">
                        {{ $errors->first('is_flash_sale') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.coupon.fields.is_flash_sale_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.coupon.fields.coupon_type') }}</label>
                <select class="form-control {{ $errors->has('coupon_type') ? 'is-invalid' : '' }}" name="coupon_type" id="coupon_type">
                    <option value disabled {{ old('coupon_type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Coupon::COUPON_TYPE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('coupon_type', $coupon->coupon_type) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('coupon_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('coupon_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.coupon.fields.coupon_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="book_category_id">{{ trans('cruds.coupon.fields.book_category') }}</label>
                <select class="form-control select2 {{ $errors->has('book_category') ? 'is-invalid' : '' }}" name="book_category_id" id="book_category_id">
                    @foreach($book_categories as $id => $book_category)
                        <option value="{{ $id }}" {{ (old('book_category_id') ? old('book_category_id') : $coupon->book_category->id ?? '') == $id ? 'selected' : '' }}>{{ $book_category }}</option>
                    @endforeach
                </select>
                @if($errors->has('book_category'))
                    <div class="invalid-feedback">
                        {{ $errors->first('book_category') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.coupon.fields.book_category_helper') }}</span>
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