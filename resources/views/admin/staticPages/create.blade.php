@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.staticPage.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.static-pages.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="static_page_type_id">{{ trans('cruds.staticPage.fields.static_page_type') }}</label>
                <select class="form-control select2 {{ $errors->has('static_page_type') ? 'is-invalid' : '' }}" name="static_page_type_id" id="static_page_type_id" required>
                    @foreach($static_page_types as $id => $static_page_type)
                        <option value="{{ $id }}" {{ old('static_page_type_id') == $id ? 'selected' : '' }}>{{ $static_page_type }}</option>
                    @endforeach
                </select>
                @if($errors->has('static_page_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('static_page_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.staticPage.fields.static_page_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="page_name">{{ trans('cruds.staticPage.fields.page_name') }}</label>
                <input class="form-control {{ $errors->has('page_name') ? 'is-invalid' : '' }}" type="text" name="page_name" id="page_name" value="{{ old('page_name', '') }}">
                @if($errors->has('page_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('page_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.staticPage.fields.page_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="page_title">{{ trans('cruds.staticPage.fields.page_title') }}</label>
                <input class="form-control {{ $errors->has('page_title') ? 'is-invalid' : '' }}" type="text" name="page_title" id="page_title" value="{{ old('page_title', '') }}">
                @if($errors->has('page_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('page_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.staticPage.fields.page_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="page_description">{{ trans('cruds.staticPage.fields.page_description') }}</label>
                <textarea class="form-control {{ $errors->has('page_description') ? 'is-invalid' : '' }}" name="page_description" id="page_description">{{ old('page_description') }}</textarea>
                @if($errors->has('page_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('page_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.staticPage.fields.page_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="slug">{{ trans('cruds.staticPage.fields.slug') }}</label>
                <input class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug" id="slug" value="{{ old('slug', '') }}">
                @if($errors->has('slug'))
                    <div class="invalid-feedback">
                        {{ $errors->first('slug') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.staticPage.fields.slug_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="meta_keywords">{{ trans('cruds.staticPage.fields.meta_keywords') }}</label>
                <input class="form-control {{ $errors->has('meta_keywords') ? 'is-invalid' : '' }}" type="text" name="meta_keywords" id="meta_keywords" value="{{ old('meta_keywords', '') }}">
                @if($errors->has('meta_keywords'))
                    <div class="invalid-feedback">
                        {{ $errors->first('meta_keywords') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.staticPage.fields.meta_keywords_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="meta_description">{{ trans('cruds.staticPage.fields.meta_description') }}</label>
                <input class="form-control {{ $errors->has('meta_description') ? 'is-invalid' : '' }}" type="text" name="meta_description" id="meta_description" value="{{ old('meta_description', '') }}">
                @if($errors->has('meta_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('meta_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.staticPage.fields.meta_description_helper') }}</span>
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