@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.indiaShippingCharge.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.india-shipping-charges.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.indiaShippingCharge.fields.id') }}
                        </th>
                        <td>
                            {{ $indiaShippingCharge->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.indiaShippingCharge.fields.pincode') }}
                        </th>
                        <td>
                            {{ $indiaShippingCharge->pincode }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.indiaShippingCharge.fields.circle_name') }}
                        </th>
                        <td>
                            {{ $indiaShippingCharge->circle_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.indiaShippingCharge.fields.taluk') }}
                        </th>
                        <td>
                            {{ $indiaShippingCharge->taluk }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.indiaShippingCharge.fields.office_name') }}
                        </th>
                        <td>
                            {{ $indiaShippingCharge->office_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.indiaShippingCharge.fields.district_name') }}
                        </th>
                        <td>
                            {{ $indiaShippingCharge->district_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.indiaShippingCharge.fields.region_name') }}
                        </th>
                        <td>
                            {{ $indiaShippingCharge->region_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.indiaShippingCharge.fields.hq_rate_per_kg') }}
                        </th>
                        <td>
                            {{ $indiaShippingCharge->hq_rate_per_kg }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.indiaShippingCharge.fields.other_rate') }}
                        </th>
                        <td>
                            {{ $indiaShippingCharge->other_rate }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.indiaShippingCharge.fields.cod_rate') }}
                        </th>
                        <td>
                            {{ $indiaShippingCharge->cod_rate }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.indiaShippingCharge.fields.total_amount') }}
                        </th>
                        <td>
                            {{ $indiaShippingCharge->total_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.indiaShippingCharge.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\IndiaShippingCharge::STATUS_SELECT[$indiaShippingCharge->status] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.india-shipping-charges.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection