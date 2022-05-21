<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyStockStatusRequest;
use App\Http\Requests\StoreStockStatusRequest;
use App\Http\Requests\UpdateStockStatusRequest;
use App\Models\StockStatus;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StockStatusController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('stock_status_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $stockStatuses = StockStatus::all();

        return view('admin.stockStatuses.index', compact('stockStatuses'));
    }

    public function create()
    {
        abort_if(Gate::denies('stock_status_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.stockStatuses.create');
    }

    public function store(StoreStockStatusRequest $request)
    {
        $stockStatus = StockStatus::create($request->all());

        return redirect()->route('admin.stock-statuses.index');
    }

    public function edit(StockStatus $stockStatus)
    {
        abort_if(Gate::denies('stock_status_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.stockStatuses.edit', compact('stockStatus'));
    }

    public function update(UpdateStockStatusRequest $request, StockStatus $stockStatus)
    {
        $stockStatus->update($request->all());

        return redirect()->route('admin.stock-statuses.index');
    }

    public function show(StockStatus $stockStatus)
    {
        abort_if(Gate::denies('stock_status_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.stockStatuses.show', compact('stockStatus'));
    }

    public function destroy(StockStatus $stockStatus)
    {
        abort_if(Gate::denies('stock_status_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $stockStatus->delete();

        return back();
    }

    public function massDestroy(MassDestroyStockStatusRequest $request)
    {
        StockStatus::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
