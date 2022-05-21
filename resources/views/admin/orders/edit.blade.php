@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.order.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.orders.update", [$order->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="invoice_prefix">{{ trans('cruds.order.fields.invoice_prefix') }}</label>
                <input class="form-control {{ $errors->has('invoice_prefix') ? 'is-invalid' : '' }}" type="text" name="invoice_prefix" id="invoice_prefix" value="{{ old('invoice_prefix', $order->invoice_prefix) }}">
                @if($errors->has('invoice_prefix'))
                    <div class="invalid-feedback">
                        {{ $errors->first('invoice_prefix') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.invoice_prefix_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="invoice_no">{{ trans('cruds.order.fields.invoice_no') }}</label>
                <input class="form-control {{ $errors->has('invoice_no') ? 'is-invalid' : '' }}" type="text" name="invoice_no" id="invoice_no" value="{{ old('invoice_no', $order->invoice_no) }}">
                @if($errors->has('invoice_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('invoice_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.invoice_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="order_amount">{{ trans('cruds.order.fields.order_amount') }}</label>
                <input class="form-control {{ $errors->has('order_amount') ? 'is-invalid' : '' }}" type="number" name="order_amount" id="order_amount" value="{{ old('order_amount', $order->order_amount) }}" step="0.01" required>
                @if($errors->has('order_amount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('order_amount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.order_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="shipping_charge">{{ trans('cruds.order.fields.shipping_charge') }}</label>
                <input class="form-control {{ $errors->has('shipping_charge') ? 'is-invalid' : '' }}" type="text" name="shipping_charge" id="shipping_charge" value="{{ old('shipping_charge', $order->shipping_charge) }}">
                @if($errors->has('shipping_charge'))
                    <div class="invalid-feedback">
                        {{ $errors->first('shipping_charge') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.shipping_charge_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="gst_amount">{{ trans('cruds.order.fields.gst_amount') }}</label>
                <input class="form-control {{ $errors->has('gst_amount') ? 'is-invalid' : '' }}" type="text" name="gst_amount" id="gst_amount" value="{{ old('gst_amount', $order->gst_amount) }}">
                @if($errors->has('gst_amount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('gst_amount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.gst_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="total_book_amount">{{ trans('cruds.order.fields.total_book_amount') }}</label>
                <input class="form-control {{ $errors->has('total_book_amount') ? 'is-invalid' : '' }}" type="text" name="total_book_amount" id="total_book_amount" value="{{ old('total_book_amount', $order->total_book_amount) }}">
                @if($errors->has('total_book_amount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('total_book_amount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.total_book_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="coupon">{{ trans('cruds.order.fields.coupon') }}</label>
                <input class="form-control {{ $errors->has('coupon') ? 'is-invalid' : '' }}" type="text" name="coupon" id="coupon" value="{{ old('coupon', $order->coupon) }}">
                @if($errors->has('coupon'))
                    <div class="invalid-feedback">
                        {{ $errors->first('coupon') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.coupon_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="coupon_discount">{{ trans('cruds.order.fields.coupon_discount') }}</label>
                <input class="form-control {{ $errors->has('coupon_discount') ? 'is-invalid' : '' }}" type="text" name="coupon_discount" id="coupon_discount" value="{{ old('coupon_discount', $order->coupon_discount) }}">
                @if($errors->has('coupon_discount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('coupon_discount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.coupon_discount_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.order.fields.payment_method') }}</label>
                <select class="form-control {{ $errors->has('payment_method') ? 'is-invalid' : '' }}" name="payment_method" id="payment_method">
                    <option value disabled {{ old('payment_method', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Order::PAYMENT_METHOD_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('payment_method', $order->payment_method) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('payment_method'))
                    <div class="invalid-feedback">
                        {{ $errors->first('payment_method') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.payment_method_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.order.fields.payment_status') }}</label>
                <select class="form-control {{ $errors->has('payment_status') ? 'is-invalid' : '' }}" name="payment_status" id="payment_status">
                    <option value disabled {{ old('payment_status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Order::PAYMENT_STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('payment_status', $order->payment_status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('payment_status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('payment_status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.payment_status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment_reference">{{ trans('cruds.order.fields.payment_reference') }}</label>
                <input class="form-control {{ $errors->has('payment_reference') ? 'is-invalid' : '' }}" type="text" name="payment_reference" id="payment_reference" value="{{ old('payment_reference', $order->payment_reference) }}">
                @if($errors->has('payment_reference'))
                    <div class="invalid-feedback">
                        {{ $errors->first('payment_reference') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.payment_reference_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="order_status_id">{{ trans('cruds.order.fields.order_status') }}</label>
                <select class="form-control select2 {{ $errors->has('order_status') ? 'is-invalid' : '' }}" name="order_status_id" id="order_status_id">
                    @foreach($order_statuses as $id => $order_status)
                        <option value="{{ $id }}" {{ (old('order_status_id') ? old('order_status_id') : $order->order_status->id ?? '') == $id ? 'selected' : '' }}>{{ $order_status }}</option>
                    @endforeach
                </select>
                @if($errors->has('order_status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('order_status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.order_status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="order_date">{{ trans('cruds.order.fields.order_date') }}</label>
                <input class="form-control {{ $errors->has('order_date') ? 'is-invalid' : '' }}" type="text" name="order_date" id="order_date" value="{{ old('order_date', $order->order_date) }}">
                @if($errors->has('order_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('order_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.order_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ip">{{ trans('cruds.order.fields.ip') }}</label>
                <input class="form-control {{ $errors->has('ip') ? 'is-invalid' : '' }}" type="text" name="ip" id="ip" value="{{ old('ip', $order->ip) }}">
                @if($errors->has('ip'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ip') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.ip_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user_agent">{{ trans('cruds.order.fields.user_agent') }}</label>
                <textarea class="form-control {{ $errors->has('user_agent') ? 'is-invalid' : '' }}" name="user_agent" id="user_agent">{{ old('user_agent', $order->user_agent) }}</textarea>
                @if($errors->has('user_agent'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user_agent') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.user_agent_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="order_key">{{ trans('cruds.order.fields.order_key') }}</label>
                <input class="form-control {{ $errors->has('order_key') ? 'is-invalid' : '' }}" type="text" name="order_key" id="order_key" value="{{ old('order_key', $order->order_key) }}">
                @if($errors->has('order_key'))
                    <div class="invalid-feedback">
                        {{ $errors->first('order_key') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.order_key_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address_id">{{ trans('cruds.order.fields.address') }}</label>
                <select class="form-control select2 {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address_id" id="address_id">
                    @foreach($addresses as $id => $address)
                        <option value="{{ $id }}" {{ (old('address_id') ? old('address_id') : $order->address->id ?? '') == $id ? 'selected' : '' }}>{{ $address }}</option>
                    @endforeach
                </select>
                @if($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection