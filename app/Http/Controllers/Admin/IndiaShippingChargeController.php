<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyIndiaShippingChargeRequest;
use App\Http\Requests\StoreIndiaShippingChargeRequest;
use App\Http\Requests\UpdateIndiaShippingChargeRequest;
use App\Models\IndiaShippingCharge;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class IndiaShippingChargeController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('india_shipping_charge_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = IndiaShippingCharge::query()->select(sprintf('%s.*', (new IndiaShippingCharge)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'india_shipping_charge_show';
                $editGate      = 'india_shipping_charge_edit';
                $deleteGate    = 'india_shipping_charge_delete';
                $crudRoutePart = 'india-shipping-charges';

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
            $table->editColumn('pincode', function ($row) {
                return $row->pincode ? $row->pincode : "";
            });
            $table->editColumn('hq_rate_per_kg', function ($row) {
                return $row->hq_rate_per_kg ? $row->hq_rate_per_kg : "";
            });
            $table->editColumn('other_rate', function ($row) {
                return $row->other_rate ? $row->other_rate : "";
            });
            $table->editColumn('cod_rate', function ($row) {
                return $row->cod_rate ? $row->cod_rate : "";
            });
            $table->editColumn('total_amount', function ($row) {
                return $row->total_amount ? $row->total_amount : "";
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.indiaShippingCharges.index');
    }

    public function create()
    {
        abort_if(Gate::denies('india_shipping_charge_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.indiaShippingCharges.create');
    }

    public function store(StoreIndiaShippingChargeRequest $request)
    {
        $indiaShippingCharge = IndiaShippingCharge::create($request->all());

        return redirect()->route('admin.india-shipping-charges.index');
    }

    public function edit(IndiaShippingCharge $indiaShippingCharge)
    {
        abort_if(Gate::denies('india_shipping_charge_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.indiaShippingCharges.edit', compact('indiaShippingCharge'));
    }

    public function update(UpdateIndiaShippingChargeRequest $request, IndiaShippingCharge $indiaShippingCharge)
    {
        $indiaShippingCharge->update($request->all());

        return redirect()->route('admin.india-shipping-charges.index');
    }

    public function show(IndiaShippingCharge $indiaShippingCharge)
    {
        abort_if(Gate::denies('india_shipping_charge_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.indiaShippingCharges.show', compact('indiaShippingCharge'));
    }

    public function destroy(IndiaShippingCharge $indiaShippingCharge)
    {
        abort_if(Gate::denies('india_shipping_charge_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $indiaShippingCharge->delete();

        return back();
    }

    public function massDestroy(MassDestroyIndiaShippingChargeRequest $request)
    {
        IndiaShippingCharge::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
