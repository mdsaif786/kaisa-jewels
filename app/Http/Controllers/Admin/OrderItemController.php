<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyOrderItemRequest;
use App\Http\Requests\StoreOrderItemRequest;
use App\Http\Requests\UpdateOrderItemRequest;
use App\Models\Book;
use App\Models\ComboOffer;
use App\Models\Order;
use App\Models\OrderItem;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OrderItemController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('order_item_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $orderItems = OrderItem::all();

        return view('admin.orderItems.index', compact('orderItems'));
    }

    public function create()
    {
        abort_if(Gate::denies('order_item_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $orders = Order::all()->pluck('invoice_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $books = Book::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $combo_offers = ComboOffer::all()->pluck('offer_title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.orderItems.create', compact('orders', 'books', 'combo_offers'));
    }

    public function store(StoreOrderItemRequest $request)
    {
        $orderItem = OrderItem::create($request->all());

        return redirect()->route('admin.order-items.index');
    }

    public function edit(OrderItem $orderItem)
    {
        abort_if(Gate::denies('order_item_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $orders = Order::all()->pluck('invoice_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $books = Book::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $combo_offers = ComboOffer::all()->pluck('offer_title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $orderItem->load('order', 'book', 'combo_offer');

        return view('admin.orderItems.edit', compact('orders', 'books', 'combo_offers', 'orderItem'));
    }

    public function update(UpdateOrderItemRequest $request, OrderItem $orderItem)
    {
        $orderItem->update($request->all());

        return redirect()->route('admin.order-items.index');
    }

    public function show(OrderItem $orderItem)
    {
        abort_if(Gate::denies('order_item_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $orderItem->load('order', 'book', 'combo_offer');

        return view('admin.orderItems.show', compact('orderItem'));
    }

    public function destroy(OrderItem $orderItem)
    {
        abort_if(Gate::denies('order_item_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $orderItem->delete();

        return back();
    }

    public function massDestroy(MassDestroyOrderItemRequest $request)
    {
        OrderItem::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
