<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCurrencyConversionRequest;
use App\Http\Requests\StoreCurrencyConversionRequest;
use App\Http\Requests\UpdateCurrencyConversionRequest;
use App\Models\Country;
use App\Models\CurrencyConversion;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class CurrencyConversionController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('currency_conversion_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = CurrencyConversion::with(['country'])->select(sprintf('%s.*', (new CurrencyConversion)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'currency_conversion_show';
                $editGate      = 'currency_conversion_edit';
                $deleteGate    = 'currency_conversion_delete';
                $crudRoutePart = 'currency-conversions';

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
            $table->addColumn('country_name', function ($row) {
                return $row->country ? $row->country->name : '';
            });

            $table->editColumn('to_date', function ($row) {
                return $row->to_date ? $row->to_date : "";
            });
            $table->editColumn('rate', function ($row) {
                return $row->rate ? $row->rate : "";
            });

            $table->rawColumns(['actions', 'placeholder', 'country']);

            return $table->make(true);
        }

        return view('admin.currencyConversions.index');
    }

    public function create()
    {
        abort_if(Gate::denies('currency_conversion_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $countries = Country::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.currencyConversions.create', compact('countries'));
    }

    public function store(StoreCurrencyConversionRequest $request)
    {
        $currencyConversion = CurrencyConversion::create($request->all());

        return redirect()->route('admin.currency-conversions.index');
    }

    public function edit(CurrencyConversion $currencyConversion)
    {
        abort_if(Gate::denies('currency_conversion_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $countries = Country::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $currencyConversion->load('country');

        return view('admin.currencyConversions.edit', compact('countries', 'currencyConversion'));
    }

    public function update(UpdateCurrencyConversionRequest $request, CurrencyConversion $currencyConversion)
    {
        $currencyConversion->update($request->all());

        return redirect()->route('admin.currency-conversions.index');
    }

    public function show(CurrencyConversion $currencyConversion)
    {
        abort_if(Gate::denies('currency_conversion_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $currencyConversion->load('country');

        return view('admin.currencyConversions.show', compact('currencyConversion'));
    }

    public function destroy(CurrencyConversion $currencyConversion)
    {
        abort_if(Gate::denies('currency_conversion_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $currencyConversion->delete();

        return back();
    }

    public function massDestroy(MassDestroyCurrencyConversionRequest $request)
    {
        CurrencyConversion::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
