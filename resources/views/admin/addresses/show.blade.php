@extends('layouts.admin')
@section('title','Show Address')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.address.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.addresses.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.address.fields.id') }}
                        </th>
                        <td>
                            {{ $address->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.address.fields.user') }}
                        </th>
                        <td>
                            {{ $address->user->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.address.fields.country') }}
                        </th>
                        <td>
                            {{ $address->country->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.address.fields.zone') }}
                        </th>
                        <td>
                            {{ $address->zone->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.address.fields.name') }}
                        </th>
                        <td>
                            {{ $address->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.address.fields.phone') }}
                        </th>
                        <td>
                            {{ $address->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.address.fields.alternate_phone') }}
                        </th>
                        <td>
                            {{ $address->alternate_phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.address.fields.address_1') }}
                        </th>
                        <td>
                            {{ $address->address_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.address.fields.address_2') }}
                        </th>
                        <td>
                            {{ $address->address_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.address.fields.pincode') }}
                        </th>
                        <td>
                            {{ $address->pincode }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.address.fields.city') }}
                        </th>
                        <td>
                            {{ $address->city }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.address.fields.additional_note') }}
                        </th>
                        <td>
                            {{ $address->additional_note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.addresses.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
