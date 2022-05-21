@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.currencyConversion.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.currency-conversions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.currencyConversion.fields.id') }}
                        </th>
                        <td>
                            {{ $currencyConversion->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.currencyConversion.fields.country') }}
                        </th>
                        <td>
                            {{ $currencyConversion->country->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.currencyConversion.fields.from_date') }}
                        </th>
                        <td>
                            {{ $currencyConversion->from_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.currencyConversion.fields.to_date') }}
                        </th>
                        <td>
                            {{ $currencyConversion->to_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.currencyConversion.fields.rate') }}
                        </th>
                        <td>
                            {{ $currencyConversion->rate }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.currency-conversions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection