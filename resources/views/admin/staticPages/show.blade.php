@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.staticPage.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.static-pages.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.staticPage.fields.id') }}
                        </th>
                        <td>
                            {{ $staticPage->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.staticPage.fields.static_page_type') }}
                        </th>
                        <td>
                            {{ $staticPage->static_page_type->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.staticPage.fields.page_name') }}
                        </th>
                        <td>
                            {{ $staticPage->page_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.staticPage.fields.page_title') }}
                        </th>
                        <td>
                            {{ $staticPage->page_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.staticPage.fields.page_description') }}
                        </th>
                        <td>
                            {{ $staticPage->page_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.staticPage.fields.slug') }}
                        </th>
                        <td>
                            {{ $staticPage->slug }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.staticPage.fields.meta_keywords') }}
                        </th>
                        <td>
                            {{ $staticPage->meta_keywords }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.staticPage.fields.meta_description') }}
                        </th>
                        <td>
                            {{ $staticPage->meta_description }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.static-pages.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection