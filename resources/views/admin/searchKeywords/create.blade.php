@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.searchKeyword.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.search-keywords.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="keyword_name">{{ trans('cruds.searchKeyword.fields.keyword_name') }}</label>
                <input class="form-control {{ $errors->has('keyword_name') ? 'is-invalid' : '' }}" type="text" name="keyword_name" id="keyword_name" value="{{ old('keyword_name', '') }}" required>
                @if($errors->has('keyword_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('keyword_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.searchKeyword.fields.keyword_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ip">{{ trans('cruds.searchKeyword.fields.ip') }}</label>
                <input class="form-control {{ $errors->has('ip') ? 'is-invalid' : '' }}" type="text" name="ip" id="ip" value="{{ old('ip', '') }}">
                @if($errors->has('ip'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ip') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.searchKeyword.fields.ip_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user_id">{{ trans('cruds.searchKeyword.fields.user') }}</label>
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
                <span class="help-block">{{ trans('cruds.searchKeyword.fields.user_helper') }}</span>
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