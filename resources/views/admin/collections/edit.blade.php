@extends('layouts.admin')
@section('title','Edit Collection')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.collection.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.collections.update", [$collection->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="collection_name">{{ trans('cruds.collection.fields.collection_name') }}</label>
                <input class="form-control {{ $errors->has('collection_name') ? 'is-invalid' : '' }}" type="text" name="collection_name" id="collection_name" value="{{ old('collection_name', $collection->collection_name) }}" required>
                @if($errors->has('collection_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('collection_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.collection.fields.collection_name_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="custom-file">
                <input type="file" name="banner_image" class="custom-file-input" id="banner_image">
                <label class="custom-file-label" for="banner_image">Update Banner Image</label>
              </div>                
            </div>
            <div class="form-group">
                <label for="collection_books">{{ trans('cruds.collection.fields.collection_book') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('collection_books') ? 'is-invalid' : '' }}" name="collection_books[]" id="collection_books" multiple>
                    @foreach($collection_books as $id => $collection_book)
                        <option value="{{ $id }}" {{ (in_array($id, old('collection_books', [])) || $collection->collection_books->contains($id)) ? 'selected' : '' }}>{{ $collection_book }}</option>
                    @endforeach
                </select>
                @if($errors->has('collection_books'))
                    <div class="invalid-feedback">
                        {{ $errors->first('collection_books') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.collection.fields.collection_book_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.collection.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Collection::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', $collection->status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.collection.fields.status_helper') }}</span>
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
