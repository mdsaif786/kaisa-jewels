@extends('layouts.admin')
@section('title','Show Business WithUs');
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.bussinessWithUs.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.bussiness-withuses.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.bussinessWithUs.fields.id') }}
                        </th>
                        <td>
                            {{ $bussinessWithUs->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.bussinessWithUs.fields.full_name') }}
                        </th>
                        <td>
                            {{ $bussinessWithUs->full_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.bussinessWithUs.fields.email') }}
                        </th>
                        <td>
                            {{ $bussinessWithUs->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.bussinessWithUs.fields.mobile') }}
                        </th>
                        <td>
                            {{ $bussinessWithUs->mobile }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.bussinessWithUs.fields.message') }}
                        </th>
                        <td>
                            {{ $bussinessWithUs->message }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.bussinessWithUs.fields.city_name') }}
                        </th>
                        <td>
                            {{ $bussinessWithUs->city_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.bussinessWithUs.fields.company_name') }}
                        </th>
                        <td>
                            {{ $bussinessWithUs->company_name }}
                        </td>
                    </tr>
                    {{-- <tr>
                        <th>
                            {{ trans('cruds.bussinessWithUs.fields.status') }}
                        </th>
                        <td>
                            {{ $bussinessWithUs->status }}
                        </td>
                    </tr> --}}
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.bussiness-withuses.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
