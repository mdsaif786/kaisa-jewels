<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyDefaultCurrencyRequest;
use App\Http\Requests\StoreDefaultCurrencyRequest;
use App\Http\Requests\UpdateDefaultCurrencyRequest;
use App\Models\Country;
use App\Models\DefaultCurrency;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class DefaultCurrencyController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('default_currency_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = DefaultCurrency::with(['country'])->select(sprintf('%s.*', (new DefaultCurrency)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'default_currency_show';
                $editGate      = 'default_currency_edit';
                $deleteGate    = 'default_currency_delete';
                $crudRoutePart = 'default-currencies';

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

            $table->editColumn('rate', function ($row) {
                return $row->rate ? $row->rate : "";
            });

            $table->rawColumns(['actions', 'placeholder', 'country']);

            return $table->make(true);
        }

        return view('admin.defaultCurrencies.index');
    }

    public function create()
    {
        abort_if(Gate::denies('default_currency_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $countries = Country::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.defaultCurrencies.create', compact('countries'));
    }

    public function store(StoreDefaultCurrencyRequest $request)
    {
        $defaultCurrency = DefaultCurrency::create($request->all());

        return redirect()->route('admin.default-currencies.index');
    }

    public function edit(DefaultCurrency $defaultCurrency)
    {
        abort_if(Gate::denies('default_currency_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $countries = Country::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $defaultCurrency->load('country');

        return view('admin.defaultCurrencies.edit', compact('countries', 'defaultCurrency'));
    }

    public function update(UpdateDefaultCurrencyRequest $request, DefaultCurrency $defaultCurrency)
    {
        $defaultCurrency->update($request->all());

        return redirect()->route('admin.default-currencies.index');
    }

    public function show(DefaultCurrency $defaultCurrency)
    {
        abort_if(Gate::denies('default_currency_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $defaultCurrency->load('country');

        return view('admin.defaultCurrencies.show', compact('defaultCurrency'));
    }

    public function destroy(DefaultCurrency $defaultCurrency)
    {
        abort_if(Gate::denies('default_currency_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $defaultCurrency->delete();

        return back();
    }

    public function massDestroy(MassDestroyDefaultCurrencyRequest $request)
    {
        DefaultCurrency::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
