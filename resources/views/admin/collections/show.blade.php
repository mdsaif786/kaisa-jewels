@extends('layouts.admin')
@section('title','Show Collection')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.collection.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.collections.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.collection.fields.id') }}
                        </th>
                        <td>
                            {{ $collection->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.collection.fields.collection_name') }}
                        </th>
                        <td>
                            {{ $collection->collection_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.collection.fields.banner_image') }}
                        </th>
                        <td>
                             <img src="{{ $collection->banner_image ?? '' }}" width="100px" height="100px">
                            
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.collection.fields.collection_book') }}
                        </th>
                        <td>
                            @foreach($collection->collection_books as $key => $collection_book)
                                <span class="badge badge-primary">{{ $collection_book->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.collection.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\Collection::STATUS_SELECT[$collection->status] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.collections.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
