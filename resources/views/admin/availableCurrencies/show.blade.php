@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.availableCurrency.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.available-currencies.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.availableCurrency.fields.id') }}
                        </th>
                        <td>
                            {{ $availableCurrency->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.availableCurrency.fields.country_name') }}
                        </th>
                        <td>
                            {{ $availableCurrency->country_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.availableCurrency.fields.currency_symbol') }}
                        </th>
                        <td>
                            {{ $availableCurrency->currency_symbol }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.availableCurrency.fields.short_name') }}
                        </th>
                        <td>
                            {{ $availableCurrency->short_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.availableCurrency.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\AvailableCurrency::STATUS_SELECT[$availableCurrency->status] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.available-currencies.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection