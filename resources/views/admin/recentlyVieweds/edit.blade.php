@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.recentlyViewed.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.recently-vieweds.update", [$recentlyViewed->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="date_time">{{ trans('cruds.recentlyViewed.fields.date_time') }}</label>
                <input class="form-control {{ $errors->has('date_time') ? 'is-invalid' : '' }}" type="text" name="date_time" id="date_time" value="{{ old('date_time', $recentlyViewed->date_time) }}">
                @if($errors->has('date_time'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_time') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.recentlyViewed.fields.date_time_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="book_id">{{ trans('cruds.recentlyViewed.fields.book') }}</label>
                <select class="form-control select2 {{ $errors->has('book') ? 'is-invalid' : '' }}" name="book_id" id="book_id">
                    @foreach($books as $id => $book)
                        <option value="{{ $id }}" {{ (old('book_id') ? old('book_id') : $recentlyViewed->book->id ?? '') == $id ? 'selected' : '' }}>{{ $book }}</option>
                    @endforeach
                </select>
                @if($errors->has('book'))
                    <div class="invalid-feedback">
                        {{ $errors->first('book') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.recentlyViewed.fields.book_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="url">{{ trans('cruds.recentlyViewed.fields.url') }}</label>
                <input class="form-control {{ $errors->has('url') ? 'is-invalid' : '' }}" type="text" name="url" id="url" value="{{ old('url', $recentlyViewed->url) }}">
                @if($errors->has('url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.recentlyViewed.fields.url_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ip">{{ trans('cruds.recentlyViewed.fields.ip') }}</label>
                <input class="form-control {{ $errors->has('ip') ? 'is-invalid' : '' }}" type="text" name="ip" id="ip" value="{{ old('ip', $recentlyViewed->ip) }}">
                @if($errors->has('ip'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ip') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.recentlyViewed.fields.ip_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="no_of_times">{{ trans('cruds.recentlyViewed.fields.no_of_times') }}</label>
                <input class="form-control {{ $errors->has('no_of_times') ? 'is-invalid' : '' }}" type="number" name="no_of_times" id="no_of_times" value="{{ old('no_of_times', $recentlyViewed->no_of_times) }}" step="1">
                @if($errors->has('no_of_times'))
                    <div class="invalid-feedback">
                        {{ $errors->first('no_of_times') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.recentlyViewed.fields.no_of_times_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user_id">{{ trans('cruds.recentlyViewed.fields.user') }}</label>
                <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id" id="user_id">
                    @foreach($users as $id => $user)
                        <option value="{{ $id }}" {{ (old('user_id') ? old('user_id') : $recentlyViewed->user->id ?? '') == $id ? 'selected' : '' }}>{{ $user }}</option>
                    @endforeach
                </select>
                @if($errors->has('user'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.recentlyViewed.fields.user_helper') }}</span>
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