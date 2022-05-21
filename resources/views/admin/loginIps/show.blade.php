@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.loginIp.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.login-ips.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.loginIp.fields.id') }}
                        </th>
                        <td>
                            {{ $loginIp->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.loginIp.fields.user') }}
                        </th>
                        <td>
                            {{ $loginIp->user }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.loginIp.fields.ip') }}
                        </th>
                        <td>
                            {{ $loginIp->ip }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.loginIp.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\LoginIp::STATUS_SELECT[$loginIp->status] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.login-ips.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection