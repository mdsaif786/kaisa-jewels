@extends('layouts.admin')
@section('title','Add Author')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.author.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.authors.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.author.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.author.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="about_author">{{ trans('cruds.author.fields.about_author') }}</label>
                <textarea class="form-control {{ $errors->has('about_author') ? 'is-invalid' : '' }}" name="about_author" id="about_author">{{ old('about_author') }}</textarea>
                @if($errors->has('about_author'))
                    <div class="invalid-feedback">
                        {{ $errors->first('about_author') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.author.fields.about_author_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="short_caption">{{ trans('cruds.author.fields.short_caption') }}</label>
                <input class="form-control {{ $errors->has('short_caption') ? 'is-invalid' : '' }}" type="text" name="short_caption" id="short_caption" value="{{ old('short_caption', '') }}">
                @if($errors->has('short_caption'))
                    <div class="invalid-feedback">
                        {{ $errors->first('short_caption') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.author.fields.short_caption_helper') }}</span>
            </div>
            
            <div class="form-group">
                <label>{{ trans('cruds.author.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Author::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.author.fields.status_helper') }}</span>
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
