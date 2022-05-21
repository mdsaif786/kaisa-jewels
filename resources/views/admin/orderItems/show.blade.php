@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.orderItem.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.order-items.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.orderItem.fields.id') }}
                        </th>
                        <td>
                            {{ $orderItem->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderItem.fields.order') }}
                        </th>
                        <td>
                            {{ $orderItem->order->invoice_no ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderItem.fields.cart_item_type') }}
                        </th>
                        <td>
                            {{ App\Models\OrderItem::CART_ITEM_TYPE_SELECT[$orderItem->cart_item_type] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderItem.fields.price') }}
                        </th>
                        <td>
                            {{ $orderItem->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderItem.fields.unit_price') }}
                        </th>
                        <td>
                            {{ $orderItem->unit_price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderItem.fields.quantity') }}
                        </th>
                        <td>
                            {{ $orderItem->quantity }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderItem.fields.gst_amount') }}
                        </th>
                        <td>
                            {{ $orderItem->gst_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderItem.fields.total_amount') }}
                        </th>
                        <td>
                            {{ $orderItem->total_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderItem.fields.book') }}
                        </th>
                        <td>
                            {{ $orderItem->book->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderItem.fields.combo_offer') }}
                        </th>
                        <td>
                            {{ $orderItem->combo_offer->offer_title ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.order-items.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection