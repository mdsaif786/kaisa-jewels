@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.order.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.orders.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.id') }}
                        </th>
                        <td>
                            {{ $order->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.invoice_prefix') }}
                        </th>
                        <td>
                            {{ $order->invoice_prefix }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.invoice_no') }}
                        </th>
                        <td>
                            {{ $order->invoice_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.order_amount') }}
                        </th>
                        <td>
                            {{ $order->order_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.shipping_charge') }}
                        </th>
                        <td>
                            {{ $order->shipping_charge }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.gst_amount') }}
                        </th>
                        <td>
                            {{ $order->gst_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.total_book_amount') }}
                        </th>
                        <td>
                            {{ $order->total_book_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.coupon') }}
                        </th>
                        <td>
                            {{ $order->coupon }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.coupon_discount') }}
                        </th>
                        <td>
                            {{ $order->coupon_discount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.payment_method') }}
                        </th>
                        <td>
                            {{ App\Models\Order::PAYMENT_METHOD_SELECT[$order->payment_method] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.payment_status') }}
                        </th>
                        <td>
                            {{ App\Models\Order::PAYMENT_STATUS_SELECT[$order->payment_status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.payment_reference') }}
                        </th>
                        <td>
                            {{ $order->payment_reference }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.is_completed') }}
                        </th>
                        <td>
                            {{ $order->is_completed }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.order_status') }}
                        </th>
                        <td>
                            {{ $order->order_status->title ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.order_date') }}
                        </th>
                        <td>
                            {{ $order->order_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.ip') }}
                        </th>
                        <td>
                            {{ $order->ip }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.user_agent') }}
                        </th>
                        <td>
                            {{ $order->user_agent }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.order_key') }}
                        </th>
                        <td>
                            {{ $order->order_key }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.address') }}
                        </th>
                        <td>
                            {{ $order->address->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.orders.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection