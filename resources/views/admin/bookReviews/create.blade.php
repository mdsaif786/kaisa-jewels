@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.bookReview.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.book-reviews.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="book_id">{{ trans('cruds.bookReview.fields.book') }}</label>
                <select class="form-control select2 {{ $errors->has('book') ? 'is-invalid' : '' }}" name="book_id" id="book_id">
                    @foreach($books as $id => $book)
                        <option value="{{ $id }}" {{ old('book_id') == $id ? 'selected' : '' }}>{{ $book }}</option>
                    @endforeach
                </select>
                @if($errors->has('book'))
                    <div class="invalid-feedback">
                        {{ $errors->first('book') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.bookReview.fields.book_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user_id">{{ trans('cruds.bookReview.fields.user') }}</label>
                <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id" id="user_id">
                    @foreach($users as $id => $user)
                        <option value="{{ $id }}" {{ old('user_id') == $id ? 'selected' : '' }}>{{ $user }}</option>
                    @endforeach
                </select>
                @if($errors->has('user'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.bookReview.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.bookReview.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', '') }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.bookReview.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="review_point">{{ trans('cruds.bookReview.fields.review_point') }}</label>
                <input class="form-control {{ $errors->has('review_point') ? 'is-invalid' : '' }}" type="number" name="review_point" id="review_point" value="{{ old('review_point', '') }}" step="1">
                @if($errors->has('review_point'))
                    <div class="invalid-feedback">
                        {{ $errors->first('review_point') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.bookReview.fields.review_point_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="message">{{ trans('cruds.bookReview.fields.message') }}</label>
                <textarea class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}" name="message" id="message">{{ old('message') }}</textarea>
                @if($errors->has('message'))
                    <div class="invalid-feedback">
                        {{ $errors->first('message') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.bookReview.fields.message_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.bookReview.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\BookReview::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', '1') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.bookReview.fields.status_helper') }}</span>
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