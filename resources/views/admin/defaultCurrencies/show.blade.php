@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.defaultCurrency.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.default-currencies.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.defaultCurrency.fields.id') }}
                        </th>
                        <td>
                            {{ $defaultCurrency->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.defaultCurrency.fields.country') }}
                        </th>
                        <td>
                            {{ $defaultCurrency->country->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.defaultCurrency.fields.rate') }}
                        </th>
                        <td>
                            {{ $defaultCurrency->rate }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.default-currencies.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection