@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.bookCategory.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.book-categories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.bookCategory.fields.id') }}
                        </th>
                        <td>
                            {{ $bookCategory->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.bookCategory.fields.name') }}
                        </th>
                        <td>
                            {{ $bookCategory->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.bookCategory.fields.parent_category') }}
                        </th>
                        <td>
                            {{ $bookCategory->parent_category->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.bookCategory.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\BookCategory::STATUS_SELECT[$bookCategory->status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.bookCategory.fields.set_order') }}
                        </th>
                        <td>
                            {{ $bookCategory->set_order }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.bookCategory.fields.show_in_mega_menu') }}
                        </th>
                        <td>
                            {{ App\Models\BookCategory::SHOW_IN_MEGA_MENU_SELECT[$bookCategory->show_in_mega_menu] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.bookCategory.fields.show_in_menu') }}
                        </th>
                        <td>
                            {{ App\Models\BookCategory::SHOW_IN_MENU_SELECT[$bookCategory->show_in_menu] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.bookCategory.fields.slug') }}
                        </th>
                        <td>
                            {{ $bookCategory->slug }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.bookCategory.fields.meta_keywords') }}
                        </th>
                        <td>
                            {{ $bookCategory->meta_keywords }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.bookCategory.fields.meta_description') }}
                        </th>
                        <td>
                            {{ $bookCategory->meta_description }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.book-categories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection