<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyOrderRequest;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Address;
use App\Models\Order;
use App\Models\OrderStatus;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('order_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Order::with(['order_status', 'address'])->select(sprintf('%s.*', (new Order)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'order_show';
                $editGate      = 'order_edit';
                $deleteGate    = 'order_delete';
                $crudRoutePart = 'orders';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->editColumn('invoice_no', function ($row) {
                return $row->invoice_no ? $row->invoice_no : "";
            });
            $table->editColumn('order_amount', function ($row) {
                return $row->order_amount ? $row->order_amount : "";
            });
            $table->editColumn('total_book_amount', function ($row) {
                return $row->total_book_amount ? $row->total_book_amount : "";
            });
            $table->addColumn('order_status_title', function ($row) {
                return $row->order_status ? $row->order_status->title : '';
            });

            $table->editColumn('order_date', function ($row) {
                return $row->order_date ? $row->order_date : "";
            });

            $table->rawColumns(['actions', 'placeholder', 'order_status']);

            return $table->make(true);
        }

        return view('admin.orders.index');
    }

    public function create()
    {
        abort_if(Gate::denies('order_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $order_statuses = OrderStatus::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $addresses = Address::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.orders.create', compact('order_statuses', 'addresses'));
    }

    public function store(StoreOrderRequest $request)
    {
        $order = Order::create($request->all());

        return redirect()->route('admin.orders.index');
    }

    public function edit(Order $order)
    {
        abort_if(Gate::denies('order_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $order_statuses = OrderStatus::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $addresses = Address::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $order->load('order_status', 'address');

        return view('admin.orders.edit', compact('order_statuses', 'addresses', 'order'));
    }

    public function update(UpdateOrderRequest $request, Order $order)
    {
        $order->update($request->all());

        return redirect()->route('admin.orders.index');
    }

    public function show(Order $order)
    {
        abort_if(Gate::denies('order_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $order->load('order_status', 'address');

        return view('admin.orders.show', compact('order'));
    }

    public function destroy(Order $order)
    {
        abort_if(Gate::denies('order_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $order->delete();

        return back();
    }

    public function massDestroy(MassDestroyOrderRequest $request)
    {
        Order::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
