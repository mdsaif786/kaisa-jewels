@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.bookCategory.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.book-categories.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">{{ trans('cruds.bookCategory.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.bookCategory.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="parent_category_id">{{ trans('cruds.bookCategory.fields.parent_category') }}</label>
                <select class="form-control select2 {{ $errors->has('parent_category') ? 'is-invalid' : '' }}" name="parent_category_id" id="parent_category_id">
                    @foreach($parent_categories as $id => $parent_category)
                        <option value="{{ $id }}" {{ old('parent_category_id') == $id ? 'selected' : '' }}>{{ $parent_category }}</option>
                    @endforeach
                </select>
                @if($errors->has('parent_category'))
                    <div class="invalid-feedback">
                        {{ $errors->first('parent_category') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.bookCategory.fields.parent_category_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.bookCategory.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\BookCategory::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', '1') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.bookCategory.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="set_order">{{ trans('cruds.bookCategory.fields.set_order') }}</label>
                <input class="form-control {{ $errors->has('set_order') ? 'is-invalid' : '' }}" type="number" name="set_order" id="set_order" value="{{ old('set_order', '') }}" step="1">
                @if($errors->has('set_order'))
                    <div class="invalid-feedback">
                        {{ $errors->first('set_order') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.bookCategory.fields.set_order_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.bookCategory.fields.show_in_mega_menu') }}</label>
                <select class="form-control {{ $errors->has('show_in_mega_menu') ? 'is-invalid' : '' }}" name="show_in_mega_menu" id="show_in_mega_menu">
                    <option value disabled {{ old('show_in_mega_menu', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\BookCategory::SHOW_IN_MEGA_MENU_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('show_in_mega_menu', '1') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('show_in_mega_menu'))
                    <div class="invalid-feedback">
                        {{ $errors->first('show_in_mega_menu') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.bookCategory.fields.show_in_mega_menu_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.bookCategory.fields.show_in_menu') }}</label>
                <select class="form-control {{ $errors->has('show_in_menu') ? 'is-invalid' : '' }}" name="show_in_menu" id="show_in_menu">
                    <option value disabled {{ old('show_in_menu', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\BookCategory::SHOW_IN_MENU_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('show_in_menu', '1') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('show_in_menu'))
                    <div class="invalid-feedback">
                        {{ $errors->first('show_in_menu') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.bookCategory.fields.show_in_menu_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="slug">{{ trans('cruds.bookCategory.fields.slug') }}</label>
                <input class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug" id="slug" value="{{ old('slug', '') }}">
                @if($errors->has('slug'))
                    <div class="invalid-feedback">
                        {{ $errors->first('slug') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.bookCategory.fields.slug_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="meta_keywords">{{ trans('cruds.bookCategory.fields.meta_keywords') }}</label>
                <input class="form-control {{ $errors->has('meta_keywords') ? 'is-invalid' : '' }}" type="text" name="meta_keywords" id="meta_keywords" value="{{ old('meta_keywords', '') }}">
                @if($errors->has('meta_keywords'))
                    <div class="invalid-feedback">
                        {{ $errors->first('meta_keywords') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.bookCategory.fields.meta_keywords_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="meta_description">{{ trans('cruds.bookCategory.fields.meta_description') }}</label>
                <input class="form-control {{ $errors->has('meta_description') ? 'is-invalid' : '' }}" type="text" name="meta_description" id="meta_description" value="{{ old('meta_description', '') }}">
                @if($errors->has('meta_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('meta_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.bookCategory.fields.meta_description_helper') }}</span>
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