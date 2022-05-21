@extends('layouts.admin')
@section('title','Show Author')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.author.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.authors.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.author.fields.id') }}
                        </th>
                        <td>
                            {{ $author->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.author.fields.name') }}
                        </th>
                        <td>
                            {{ $author->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.author.fields.about_author') }}
                        </th>
                        <td>
                            {{ $author->about_author }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.author.fields.short_caption') }}
                        </th>
                        <td>
                            {{ $author->short_caption }}
                        </td>
                    </tr>
                   
                    <tr>
                        <th>
                            {{ trans('cruds.author.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\Author::STATUS_SELECT[$author->status] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.authors.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
