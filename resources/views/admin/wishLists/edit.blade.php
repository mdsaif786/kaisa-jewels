@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.wishList.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.wish-lists.update", [$wishList->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="user_id">{{ trans('cruds.wishList.fields.user') }}</label>
                <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id" id="user_id">
                    @foreach($users as $id => $user)
                        <option value="{{ $id }}" {{ (old('user_id') ? old('user_id') : $wishList->user->id ?? '') == $id ? 'selected' : '' }}>{{ $user }}</option>
                    @endforeach
                </select>
                @if($errors->has('user'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.wishList.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ip">{{ trans('cruds.wishList.fields.ip') }}</label>
                <input class="form-control {{ $errors->has('ip') ? 'is-invalid' : '' }}" type="text" name="ip" id="ip" value="{{ old('ip', $wishList->ip) }}">
                @if($errors->has('ip'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ip') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.wishList.fields.ip_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="book_id">{{ trans('cruds.wishList.fields.book') }}</label>
                <select class="form-control select2 {{ $errors->has('book') ? 'is-invalid' : '' }}" name="book_id" id="book_id">
                    @foreach($books as $id => $book)
                        <option value="{{ $id }}" {{ (old('book_id') ? old('book_id') : $wishList->book->id ?? '') == $id ? 'selected' : '' }}>{{ $book }}</option>
                    @endforeach
                </select>
                @if($errors->has('book'))
                    <div class="invalid-feedback">
                        {{ $errors->first('book') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.wishList.fields.book_helper') }}</span>
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