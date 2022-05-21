@extends('layouts.admin')
@section('title','Show Book Review')
@section('content')
<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.bookReview.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.book-reviews.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.bookReview.fields.id') }}
                        </th>
                        <td>
                            {{ $bookReview->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.bookReview.fields.book') }}
                        </th>
                        <td>
                            {{ $bookReview->book->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.bookReview.fields.user') }}
                        </th>
                        <td>
                            {{ $bookReview->user->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.bookReview.fields.email') }}
                        </th>
                        <td>
                            {{ $bookReview->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.bookReview.fields.review_point') }}
                        </th>
                        <td>
                            {{ $bookReview->review_point }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.bookReview.fields.message') }}
                        </th>
                        <td>
                            {{ $bookReview->message }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.bookReview.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\BookReview::STATUS_SELECT[$bookReview->status] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.book-reviews.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
