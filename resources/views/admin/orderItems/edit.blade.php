@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.orderItem.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.order-items.update", [$orderItem->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="order_id">{{ trans('cruds.orderItem.fields.order') }}</label>
                <select class="form-control select2 {{ $errors->has('order') ? 'is-invalid' : '' }}" name="order_id" id="order_id">
                    @foreach($orders as $id => $order)
                        <option value="{{ $id }}" {{ (old('order_id') ? old('order_id') : $orderItem->order->id ?? '') == $id ? 'selected' : '' }}>{{ $order }}</option>
                    @endforeach
                </select>
                @if($errors->has('order'))
                    <div class="invalid-feedback">
                        {{ $errors->first('order') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.orderItem.fields.order_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.orderItem.fields.cart_item_type') }}</label>
                <select class="form-control {{ $errors->has('cart_item_type') ? 'is-invalid' : '' }}" name="cart_item_type" id="cart_item_type">
                    <option value disabled {{ old('cart_item_type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\OrderItem::CART_ITEM_TYPE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('cart_item_type', $orderItem->cart_item_type) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('cart_item_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cart_item_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.orderItem.fields.cart_item_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price">{{ trans('cruds.orderItem.fields.price') }}</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="number" name="price" id="price" value="{{ old('price', $orderItem->price) }}" step="0.01">
                @if($errors->has('price'))
                    <div class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.orderItem.fields.price_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit_price">{{ trans('cruds.orderItem.fields.unit_price') }}</label>
                <input class="form-control {{ $errors->has('unit_price') ? 'is-invalid' : '' }}" type="number" name="unit_price" id="unit_price" value="{{ old('unit_price', $orderItem->unit_price) }}" step="0.01">
                @if($errors->has('unit_price'))
                    <div class="invalid-feedback">
                        {{ $errors->first('unit_price') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.orderItem.fields.unit_price_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="quantity">{{ trans('cruds.orderItem.fields.quantity') }}</label>
                <input class="form-control {{ $errors->has('quantity') ? 'is-invalid' : '' }}" type="number" name="quantity" id="quantity" value="{{ old('quantity', $orderItem->quantity) }}" step="1" required>
                @if($errors->has('quantity'))
                    <div class="invalid-feedback">
                        {{ $errors->first('quantity') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.orderItem.fields.quantity_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="gst_amount">{{ trans('cruds.orderItem.fields.gst_amount') }}</label>
                <input class="form-control {{ $errors->has('gst_amount') ? 'is-invalid' : '' }}" type="number" name="gst_amount" id="gst_amount" value="{{ old('gst_amount', $orderItem->gst_amount) }}" step="0.01">
                @if($errors->has('gst_amount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('gst_amount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.orderItem.fields.gst_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="total_amount">{{ trans('cruds.orderItem.fields.total_amount') }}</label>
                <input class="form-control {{ $errors->has('total_amount') ? 'is-invalid' : '' }}" type="number" name="total_amount" id="total_amount" value="{{ old('total_amount', $orderItem->total_amount) }}" step="0.01">
                @if($errors->has('total_amount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('total_amount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.orderItem.fields.total_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="book_id">{{ trans('cruds.orderItem.fields.book') }}</label>
                <select class="form-control select2 {{ $errors->has('book') ? 'is-invalid' : '' }}" name="book_id" id="book_id">
                    @foreach($books as $id => $book)
                        <option value="{{ $id }}" {{ (old('book_id') ? old('book_id') : $orderItem->book->id ?? '') == $id ? 'selected' : '' }}>{{ $book }}</option>
                    @endforeach
                </select>
                @if($errors->has('book'))
                    <div class="invalid-feedback">
                        {{ $errors->first('book') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.orderItem.fields.book_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="combo_offer_id">{{ trans('cruds.orderItem.fields.combo_offer') }}</label>
                <select class="form-control select2 {{ $errors->has('combo_offer') ? 'is-invalid' : '' }}" name="combo_offer_id" id="combo_offer_id">
                    @foreach($combo_offers as $id => $combo_offer)
                        <option value="{{ $id }}" {{ (old('combo_offer_id') ? old('combo_offer_id') : $orderItem->combo_offer->id ?? '') == $id ? 'selected' : '' }}>{{ $combo_offer }}</option>
                    @endforeach
                </select>
                @if($errors->has('combo_offer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('combo_offer') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.orderItem.fields.combo_offer_helper') }}</span>
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