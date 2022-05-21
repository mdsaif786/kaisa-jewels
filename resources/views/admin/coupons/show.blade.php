@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.coupon.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.coupons.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.coupon.fields.id') }}
                        </th>
                        <td>
                            {{ $coupon->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.coupon.fields.coupon_name') }}
                        </th>
                        <td>
                            {{ $coupon->coupon_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.coupon.fields.coupon_code') }}
                        </th>
                        <td>
                            {{ $coupon->coupon_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.coupon.fields.discount') }}
                        </th>
                        <td>
                            {{ $coupon->discount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.coupon.fields.minimum_amount') }}
                        </th>
                        <td>
                            {{ $coupon->minimum_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.coupon.fields.coupon_discount_type') }}
                        </th>
                        <td>
                            {{ App\Models\Coupon::COUPON_DISCOUNT_TYPE_SELECT[$coupon->coupon_discount_type] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.coupon.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\Coupon::STATUS_SELECT[$coupon->status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.coupon.fields.is_flash_sale') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $coupon->is_flash_sale ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.coupon.fields.coupon_type') }}
                        </th>
                        <td>
                            {{ App\Models\Coupon::COUPON_TYPE_SELECT[$coupon->coupon_type] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.coupon.fields.book_category') }}
                        </th>
                        <td>
                            {{ $coupon->book_category->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.coupons.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection