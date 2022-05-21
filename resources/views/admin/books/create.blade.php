@extends('layouts.admin')
@section('title','Add Book')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.book.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.books.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                
            <div class="col-sm-6">
            <div class="form-group">
                <label for="category_id">{{ trans('cruds.book.fields.category') }}</label>
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
                <span class="help-block">{{ trans('cruds.book.fields.category_helper') }}</span>
            </div>
          </div>
          <div class="col-sm-6">
              <div class="form-group">
                <label for="sub_category_id">{{ trans('cruds.book.fields.sub_category') }}</label>
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
                <span class="help-block">{{ trans('cruds.book.fields.sub_category_helper') }}</span>
            </div>
          </div>
        </div>

            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.book.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.book.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description') }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
               
                 <div class="custom-file mb-3">
                  <input type="file" class="custom-file-input" name="image" id="image">
                  <label class="custom-file-label" for="customFile">upload image</label>
                </div>
                @if($errors->has('image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.image_helper') }}</span>
            </div>
             {{--  row start --}}
             <div class="row">
                 <div class="col-sm-4">
                      <div class="form-group">
                <label for="mrp">{{ trans('cruds.book.fields.mrp') }}</label>
                <input class="form-control {{ $errors->has('mrp') ? 'is-invalid' : '' }}" type="number" name="mrp" id="mrp" value="{{ old('mrp', '') }}" step="0.01">
                @if($errors->has('mrp'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mrp') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.mrp_helper') }}</span>
            </div>
                 </div>
                 <div class="col-sm-4">
                     <div class="form-group">
                        <label for="price">{{ trans('cruds.book.fields.price') }}</label>
                        <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="number" name="price" id="price" value="{{ old('price', '') }}" step="0.01">
                        @if($errors->has('price'))
                            <div class="invalid-feedback">
                                {{ $errors->first('price') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.book.fields.price_helper') }}</span>
                    </div>
                 </div>
                 <div class="col-sm-4">
                     <div class="form-group">
                        <label for="isbn_30">{{ trans('cruds.book.fields.isbn_30') }}</label>
                        <input class="form-control {{ $errors->has('isbn_30') ? 'is-invalid' : '' }}" type="text" name="isbn_30" id="isbn_30" value="{{ old('isbn_30', '') }}">
                        @if($errors->has('isbn_30'))
                            <div class="invalid-feedback">
                                {{ $errors->first('isbn_30') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.book.fields.isbn_30_helper') }}</span>
                    </div>
                 </div>
             </div>
           {{-- row end --}}
         {{--    row start --}}
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="isbn_10">{{ trans('cruds.book.fields.isbn_10') }}</label>
                        <input class="form-control {{ $errors->has('isbn_10') ? 'is-invalid' : '' }}" type="text" name="isbn_10" id="isbn_10" value="{{ old('isbn_10', '') }}">
                        @if($errors->has('isbn_10'))
                            <div class="invalid-feedback">
                                {{ $errors->first('isbn_10') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.book.fields.isbn_10_helper') }}</span>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="weight">{{ trans('cruds.book.fields.weight') }}</label>
                        <input class="form-control {{ $errors->has('weight') ? 'is-invalid' : '' }}" type="text" name="weight" id="weight" value="{{ old('weight', '') }}">
                        @if($errors->has('weight'))
                            <div class="invalid-feedback">
                                {{ $errors->first('weight') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.book.fields.weight_helper') }}</span>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="sku">{{ trans('cruds.book.fields.sku') }}</label>
                        <input class="form-control {{ $errors->has('sku') ? 'is-invalid' : '' }}" type="text" name="sku" id="sku" value="{{ old('sku', '') }}">
                        @if($errors->has('sku'))
                            <div class="invalid-feedback">
                                {{ $errors->first('sku') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.book.fields.sku_helper') }}</span>
                    </div>
                </div>
            </div> 
           {{--  row end --}}
          {{--  row start --}}
          <div class="row">
              <div class="col-sm-4">
                  <div class="form-group">
                    <label for="dimensions">{{ trans('cruds.book.fields.dimensions') }}</label>
                    <input class="form-control {{ $errors->has('dimensions') ? 'is-invalid' : '' }}" type="text" name="dimensions" id="dimensions" value="{{ old('dimensions', '') }}">
                    @if($errors->has('dimensions'))
                        <div class="invalid-feedback">
                            {{ $errors->first('dimensions') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.book.fields.dimensions_helper') }}</span>
                </div>
              </div>
              <div class="col-sm-4">
                  <div class="form-group">
                    <label for="no_of_pages">{{ trans('cruds.book.fields.no_of_pages') }}</label>
                    <input class="form-control {{ $errors->has('no_of_pages') ? 'is-invalid' : '' }}" type="number" name="no_of_pages" id="no_of_pages" value="{{ old('no_of_pages', '') }}" step="1">
                    @if($errors->has('no_of_pages'))
                        <div class="invalid-feedback">
                            {{ $errors->first('no_of_pages') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.book.fields.no_of_pages_helper') }}</span>
                </div>
              </div>
              <div class="col-sm-4">
                  <div class="form-group">
                    <label class="required">{{ trans('cruds.book.fields.book_type') }}</label>
                    <select class="form-control {{ $errors->has('book_type') ? 'is-invalid' : '' }}" name="book_type" id="book_type" required>
                        <option value disabled {{ old('book_type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                        @foreach(App\Models\Book::BOOK_TYPE_SELECT as $key => $label)
                            <option value="{{ $key }}" {{ old('book_type', '1') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('book_type'))
                        <div class="invalid-feedback">
                            {{ $errors->first('book_type') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.book.fields.book_type_helper') }}
                    </span>
                </div>
              </div>
          </div>
          {{--  row end --}}
           {{--  row start --}}
           <div class="row">
               <div class="col-sm-4">
                   <div class="form-group">
                <label for="book_authors_id">{{ trans('cruds.book.fields.book_authors') }}</label>
                <select class="form-control {{ $errors->has('book_authors') ? 'is-invalid' : '' }}" name="book_authors_id" id="book_authors_id">
                    @foreach($book_authors as $id => $book_authors)
                        <option value="{{ $id }}" {{ old('book_authors_id') == $id ? 'selected' : '' }}>{{ $book_authors }}</option>
                    @endforeach
                </select>
                @if($errors->has('book_authors'))
                    <div class="invalid-feedback">
                        {{ $errors->first('book_authors') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.book_authors_helper') }}</span>
            </div>
               </div>
               <div class="col-sm-4">
                   <div class="form-group">
                <label for="publisher_id">{{ trans('cruds.book.fields.publisher') }}</label>
                <select class="form-control {{ $errors->has('publisher') ? 'is-invalid' : '' }}" name="publisher_id" id="publisher_id">
                    @foreach($publishers as $id => $publisher)
                        <option value="{{ $id }}" {{ old('publisher_id') == $id ? 'selected' : '' }}>{{ $publisher }}</option>
                    @endforeach
                </select>
                @if($errors->has('publisher'))
                    <div class="invalid-feedback">
                        {{ $errors->first('publisher') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.publisher_helper') }}</span>
            </div>
               </div>
               <div class="col-sm-4">
                 <div class="form-group">
                    <label for="stock_status_id">{{ trans('cruds.book.fields.stock_status') }}</label>
                    <select class="form-control {{ $errors->has('stock_status') ? 'is-invalid' : '' }}" name="stock_status_id" id="stock_status_id">
                        @foreach($stock_statuses as $id => $stock_status)
                            <option value="{{ $id }}" {{ old('stock_status_id') == $id ? 'selected' : '' }}>{{ $stock_status }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('stock_status'))
                        <div class="invalid-feedback">
                            {{ $errors->first('stock_status') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.book.fields.stock_status_helper') }}</span>
                </div>
               </div>
               <div class="col-sm-4">
                  <div class="form-group">
                    <label for="quantity">{{ trans('cruds.book.fields.quantity') }}</label>
                    <input class="form-control {{ $errors->has('quantity') ? 'is-invalid' : '' }}" type="number" name="quantity" id="quantity" value="{{ old('quantity', '') }}" step="1" min=1>
                    @if($errors->has('quantity'))
                        <div class="invalid-feedback">
                            {{ $errors->first('quantity') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.book.fields.quantity_helper') }}</span>
                </div>
              </div>
              <div class="col-sm-4">
                  <div class="form-group">
                    <label for="condition">{{ trans('cruds.book.fields.condition') }}</label>
                    <input class="form-control {{ $errors->has('condition') ? 'is-invalid' : '' }}" type="text" name="condition" id="condition" value="{{ old('condition', '') }}" step="1">
                    @if($errors->has('condition'))
                        <div class="invalid-feedback">
                            {{ $errors->first('condition') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.book.fields.condition_helper') }}</span>
                </div>
              </div>
           </div>

           {{--  row end --}}
           {{--  row start --}}
           <div class="row">
               <div class="col-sm-4">
                   <div class="form-group">
                    <label for="binding_types">{{ trans('cruds.book.fields.binding_types') }}</label>
                    <div style="padding-bottom: 4px">
                        <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                        <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                    </div>
                    <select class="form-control select2 {{ $errors->has('binding_types') ? 'is-invalid' : '' }}" name="binding_types[]" id="binding_types" multiple>
                        @foreach($binding_types as $id => $binding_types)
                            <option value="{{ $id }}" {{ in_array($id, old('binding_types', [])) ? 'selected' : '' }}>{{ $binding_types }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('binding_types'))
                        <div class="invalid-feedback">
                            {{ $errors->first('binding_types') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.book.fields.binding_types_helper') }}</span>
                </div>
               </div>
               <div class="col-sm-4">
                   <div class="form-group">
                        <label for="language_id">{{ trans('cruds.book.fields.language') }}</label>
                        <select class="form-control select2 {{ $errors->has('language') ? 'is-invalid' : '' }}" name="language_id" id="language_id">
                            @foreach($languages as $id => $language)
                                <option value="{{ $id }}" {{ old('language_id') == $id ? 'selected' : '' }}>{{ $language }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('language'))
                            <div class="invalid-feedback">
                                {{ $errors->first('language') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.book.fields.language_helper') }}</span>
                    </div>
               </div>
               <div class="col-sm-4">
                   <div class="form-group">
                    <label>{{ trans('cruds.book.fields.status') }}</label>
                    <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                        <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                        @foreach(App\Models\Book::STATUS_SELECT as $key => $label)
                            <option value="{{ $key }}" {{ old('status', '1') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('status'))
                        <div class="invalid-feedback">
                            {{ $errors->first('status') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.book.fields.status_helper') }}</span>
                </div>
               </div>
           </div>
           {{--  row end --}}
           {{--  row start --}}
           <div class="row">
               <div class="col-sm-4">
                   <div class="form-group">
                    <label for="publication_city_or_country">{{ trans('cruds.book.fields.publication_city_or_country') }}</label>
                    <input class="form-control {{ $errors->has('publication_city_or_country') ? 'is-invalid' : '' }}" type="text" name="publication_city_or_country" id="publication_city_or_country" value="{{ old('publication_city_or_country', '') }}">
                    @if($errors->has('publication_city_or_country'))
                        <div class="invalid-feedback">
                            {{ $errors->first('publication_city_or_country') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.book.fields.publication_city_or_country_helper') }}</span>
                </div>
               </div>
               <div class="col-sm-4">
                   <div class="form-group">
                <label for="publication_date">{{ trans('cruds.book.fields.publication_date') }}</label>
                <input class="form-control date {{ $errors->has('publication_date') ? 'is-invalid' : '' }}" type="text" name="publication_date" id="publication_date" value="{{ old('publication_date') }}">
                @if($errors->has('publication_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('publication_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.publication_date_helper') }}</span>
            </div>
               </div>
               <div class="col-sm-4">
                   <div class="form-group">
                <label for="coupon_discount">{{ trans('cruds.book.fields.coupon_discount') }}</label>
                <input class="form-control {{ $errors->has('coupon_discount') ? 'is-invalid' : '' }}" type="number" name="coupon_discount" id="coupon_discount" value="{{ old('coupon_discount', '') }}" step="0.01">
                @if($errors->has('coupon_discount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('coupon_discount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.coupon_discount_helper') }}</span>
            </div>
               </div>
           </div>
           {{--  row end --}}
           {{--  row start --}}
           <div class="row">
               <div class="col-sm-4">
                   <div class="form-group">
                <label for="no_of_qty_for_discount">{{ trans('cruds.book.fields.no_of_qty_for_discount') }}</label>
                <input class="form-control {{ $errors->has('no_of_qty_for_discount') ? 'is-invalid' : '' }}" type="number" name="no_of_qty_for_discount" id="no_of_qty_for_discount" value="{{ old('no_of_qty_for_discount', '') }}" step="1">
                @if($errors->has('no_of_qty_for_discount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('no_of_qty_for_discount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.no_of_qty_for_discount_helper') }}</span>
            </div>
               </div>
               <div class="col-sm-4">
                   <div class="form-group">
                <label for="coupon_code">{{ trans('cruds.book.fields.coupon_code') }}</label>
                <input class="form-control {{ $errors->has('coupon_code') ? 'is-invalid' : '' }}" type="text" name="coupon_code" id="coupon_code" value="{{ old('coupon_code', '') }}">
                @if($errors->has('coupon_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('coupon_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.coupon_code_helper') }}</span>
            </div>
               </div>
               <div class="col-sm-4">
                   <div class="form-group">
                <label for="slug">{{ trans('cruds.book.fields.slug') }}</label>
                <input class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug" id="slug" value="{{ old('slug', '') }}">
                @if($errors->has('slug'))
                    <div class="invalid-feedback">
                        {{ $errors->first('slug') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.slug_helper') }}</span>
            </div>
               </div>
           </div>
           {{--  row end --}}
           {{--  row start --}}
           <div class="row">
               <div class="col-sm-6">
                   <div class="form-group">
                <label for="meta_keywords">{{ trans('cruds.book.fields.meta_keywords') }}</label>
                <input class="form-control {{ $errors->has('meta_keywords') ? 'is-invalid' : '' }}" type="text" name="meta_keywords" id="meta_keywords" value="{{ old('meta_keywords', '') }}">
                @if($errors->has('meta_keywords'))
                    <div class="invalid-feedback">
                        {{ $errors->first('meta_keywords') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.meta_keywords_helper') }}</span>
            </div>
               </div>
               <div class="col-sm-6">
                    <div class="form-group">
                <label for="meta_description">{{ trans('cruds.book.fields.meta_description') }}</label>
                <input class="form-control {{ $errors->has('meta_description') ? 'is-invalid' : '' }}" type="text" name="meta_description" id="meta_description" value="{{ old('meta_description', '') }}">
                @if($errors->has('meta_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('meta_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.meta_description_helper') }}</span>
            </div>
               </div>
               
           </div>
           {{--  row end --}}
           {{--  row start --}}
           <div class="row">
               <div class="col-sm-3">
                    <div class="form-group">
                <div class="form-check {{ $errors->has('handpicked') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="handpicked" value="0">
                    <input class="form-check-input" type="checkbox" name="handpicked" id="handpicked" value="1" {{ old('handpicked', 0) == 1 || old('handpicked') === null ? 'checked' : '' }}>
                    <label class="form-check-label" for="handpicked">{{ trans('cruds.book.fields.handpicked') }}</label>
                </div>
                @if($errors->has('handpicked'))
                    <div class="invalid-feedback">
                        {{ $errors->first('handpicked') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.handpicked_helper') }}</span>
            </div>
               </div>
               <div class="col-sm-3">
                    <div class="form-group">
                <div class="form-check {{ $errors->has('new_arrival') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="new_arrival" value="0">
                    <input class="form-check-input" type="checkbox" name="new_arrival" id="new_arrival" value="1" {{ old('new_arrival', 0) == 1 || old('new_arrival') === null ? 'checked' : '' }}>
                    <label class="form-check-label" for="new_arrival">{{ trans('cruds.book.fields.new_arrival') }}</label>
                </div>
                @if($errors->has('new_arrival'))
                    <div class="invalid-feedback">
                        {{ $errors->first('new_arrival') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.new_arrival_helper') }}</span>
            </div>
               </div>
               <div class="col-sm-3">
                   <div class="form-group">
                <div class="form-check {{ $errors->has('best_sellers') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="best_sellers" value="0">
                    <input class="form-check-input" type="checkbox" name="best_sellers" id="best_sellers" value="1" {{ old('best_sellers', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="best_sellers">{{ trans('cruds.book.fields.best_sellers') }}</label>
                </div>
                @if($errors->has('best_sellers'))
                    <div class="invalid-feedback">
                        {{ $errors->first('best_sellers') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.best_sellers_helper') }}</span>
            </div>
               </div>
               <div class="col-sm-3">
                   <div class="form-group">
                <div class="form-check {{ $errors->has('all_time_classic') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="all_time_classic" value="0">
                    <input class="form-check-input" type="checkbox" name="all_time_classic" id="all_time_classic" value="1" {{ old('all_time_classic', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="all_time_classic">{{ trans('cruds.book.fields.all_time_classic') }}</label>
                </div>
                @if($errors->has('all_time_classic'))
                    <div class="invalid-feedback">
                        {{ $errors->first('all_time_classic') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.all_time_classic_helper') }}</span>
            </div>
               </div>
           </div>
           {{--  row end --}}
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
