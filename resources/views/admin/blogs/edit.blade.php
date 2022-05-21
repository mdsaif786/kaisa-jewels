@extends('layouts.admin')
@section('title','Edit Blog Post')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.blog.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.blogs.update", [$blog->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.blog.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $blog->title) }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.blog.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="custom-file">
                <input type="file" name="image" class="custom-file-input" id="image">
                <label class="custom-file-label" for="image">Update Image</label>
              </div>                
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.blog.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description', $blog->description) }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.blog.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="slug">{{ trans('cruds.blog.fields.slug') }}</label>
                <input class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug" id="slug" value="{{ old('slug', $blog->slug) }}">
                @if($errors->has('slug'))
                    <div class="invalid-feedback">
                        {{ $errors->first('slug') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.blog.fields.slug_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="meta_keyword">{{ trans('cruds.blog.fields.meta_keyword') }}</label>
                <input class="form-control {{ $errors->has('meta_keyword') ? 'is-invalid' : '' }}" type="text" name="meta_keyword" id="meta_keyword" value="{{ old('meta_keyword', $blog->meta_keyword) }}">
                @if($errors->has('meta_keyword'))
                    <div class="invalid-feedback">
                        {{ $errors->first('meta_keyword') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.blog.fields.meta_keyword_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="meta_description">{{ trans('cruds.blog.fields.meta_description') }}</label>
                <textarea class="form-control {{ $errors->has('meta_description') ? 'is-invalid' : '' }}" name="meta_description" id="meta_description">{{ old('meta_description', $blog->meta_description) }}</textarea>
                @if($errors->has('meta_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('meta_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.blog.fields.meta_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.blog.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Blog::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', $blog->status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.blog.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="blog_category_id">{{ trans('cruds.blog.fields.blog_category') }}</label>
                <select class="form-control select2 {{ $errors->has('blog_category') ? 'is-invalid' : '' }}" name="blog_category_id" id="blog_category_id">
                    @foreach($blog_categories as $id => $blog_category)
                        <option value="{{ $id }}" {{ (old('blog_category_id') ? old('blog_category_id') : $blog->blog_category->id ?? '') == $id ? 'selected' : '' }}>{{ $blog_category }}</option>
                    @endforeach
                </select>
                @if($errors->has('blog_category'))
                    <div class="invalid-feedback">
                        {{ $errors->first('blog_category') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.blog.fields.blog_category_helper') }}</span>
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
