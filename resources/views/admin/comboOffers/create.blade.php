@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.comboOffer.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.combo-offers.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="offer_title">{{ trans('cruds.comboOffer.fields.offer_title') }}</label>
                <input class="form-control {{ $errors->has('offer_title') ? 'is-invalid' : '' }}" type="text" name="offer_title" id="offer_title" value="{{ old('offer_title', '') }}" required>
                @if($errors->has('offer_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('offer_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.comboOffer.fields.offer_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="category_id">{{ trans('cruds.comboOffer.fields.category') }}</label>
                <select class="form-control select2 {{ $errors->has('category') ? 'is-invalid' : '' }}" name="category_id" id="category_id">
                    @foreach($categories as $id => $category)
                        <option value="{{ $id }}" {{ old('category_id') == $id ? 'selected' : '' }}>{{ $category }}</option>
                    @endforeach
                </select>
                @if($errors->has('category'))
                    <div class="invalid-feedback">
                        {{ $errors->first('category') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.comboOffer.fields.category_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="sub_category_id">{{ trans('cruds.comboOffer.fields.sub_category') }}</label>
                <select class="form-control select2 {{ $errors->has('sub_category') ? 'is-invalid' : '' }}" name="sub_category_id" id="sub_category_id">
                    @foreach($sub_categories as $id => $sub_category)
                        <option value="{{ $id }}" {{ old('sub_category_id') == $id ? 'selected' : '' }}>{{ $sub_category }}</option>
                    @endforeach
                </select>
                @if($errors->has('sub_category'))
                    <div class="invalid-feedback">
                        {{ $errors->first('sub_category') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.comboOffer.fields.sub_category_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price">{{ trans('cruds.comboOffer.fields.price') }}</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="number" name="price" id="price" value="{{ old('price', '') }}" step="0.01">
                @if($errors->has('price'))
                    <div class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.comboOffer.fields.price_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="discount_amount">{{ trans('cruds.comboOffer.fields.discount_amount') }}</label>
                <input class="form-control {{ $errors->has('discount_amount') ? 'is-invalid' : '' }}" type="number" name="discount_amount" id="discount_amount" value="{{ old('discount_amount', '') }}" step="0.01">
                @if($errors->has('discount_amount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('discount_amount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.comboOffer.fields.discount_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="discount_percentage">{{ trans('cruds.comboOffer.fields.discount_percentage') }}</label>
                <input class="form-control {{ $errors->has('discount_percentage') ? 'is-invalid' : '' }}" type="number" name="discount_percentage" id="discount_percentage" value="{{ old('discount_percentage', '') }}" step="1">
                @if($errors->has('discount_percentage'))
                    <div class="invalid-feedback">
                        {{ $errors->first('discount_percentage') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.comboOffer.fields.discount_percentage_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="combo_offer_books">{{ trans('cruds.comboOffer.fields.combo_offer_book') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('combo_offer_books') ? 'is-invalid' : '' }}" name="combo_offer_books[]" id="combo_offer_books" multiple>
                    @foreach($combo_offer_books as $id => $combo_offer_book)
                        <option value="{{ $id }}" {{ in_array($id, old('combo_offer_books', [])) ? 'selected' : '' }}>{{ $combo_offer_book }}</option>
                    @endforeach
                </select>
                @if($errors->has('combo_offer_books'))
                    <div class="invalid-feedback">
                        {{ $errors->first('combo_offer_books') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.comboOffer.fields.combo_offer_book_helper') }}</span>
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