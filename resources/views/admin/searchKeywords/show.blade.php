@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.searchKeyword.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.search-keywords.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.searchKeyword.fields.id') }}
                        </th>
                        <td>
                            {{ $searchKeyword->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.searchKeyword.fields.keyword_name') }}
                        </th>
                        <td>
                            {{ $searchKeyword->keyword_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.searchKeyword.fields.ip') }}
                        </th>
                        <td>
                            {{ $searchKeyword->ip }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.searchKeyword.fields.user') }}
                        </th>
                        <td>
                            {{ $searchKeyword->user->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.search-keywords.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection