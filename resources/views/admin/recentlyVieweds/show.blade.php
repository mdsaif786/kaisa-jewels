@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.recentlyViewed.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.recently-vieweds.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.recentlyViewed.fields.id') }}
                        </th>
                        <td>
                            {{ $recentlyViewed->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.recentlyViewed.fields.date_time') }}
                        </th>
                        <td>
                            {{ $recentlyViewed->date_time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.recentlyViewed.fields.book') }}
                        </th>
                        <td>
                            {{ $recentlyViewed->book->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.recentlyViewed.fields.url') }}
                        </th>
                        <td>
                            {{ $recentlyViewed->url }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.recentlyViewed.fields.ip') }}
                        </th>
                        <td>
                            {{ $recentlyViewed->ip }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.recentlyViewed.fields.no_of_times') }}
                        </th>
                        <td>
                            {{ $recentlyViewed->no_of_times }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.recentlyViewed.fields.user') }}
                        </th>
                        <td>
                            {{ $recentlyViewed->user->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.recently-vieweds.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection