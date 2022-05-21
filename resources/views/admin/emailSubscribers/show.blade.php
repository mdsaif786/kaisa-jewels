@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.emailSubscriber.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.email-subscribers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.emailSubscriber.fields.id') }}
                        </th>
                        <td>
                            {{ $emailSubscriber->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.emailSubscriber.fields.name') }}
                        </th>
                        <td>
                            {{ $emailSubscriber->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.emailSubscriber.fields.email') }}
                        </th>
                        <td>
                            {{ $emailSubscriber->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.emailSubscriber.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\EmailSubscriber::STATUS_SELECT[$emailSubscriber->status] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.email-subscribers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection