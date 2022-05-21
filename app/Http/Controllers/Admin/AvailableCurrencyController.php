<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAvailableCurrencyRequest;
use App\Http\Requests\StoreAvailableCurrencyRequest;
use App\Http\Requests\UpdateAvailableCurrencyRequest;
use App\Models\AvailableCurrency;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AvailableCurrencyController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('available_currency_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $availableCurrencies = AvailableCurrency::all();

        return view('admin.availableCurrencies.index', compact('availableCurrencies'));
    }

    public function create()
    {
        abort_if(Gate::denies('available_currency_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.availableCurrencies.create');
    }

    public function store(StoreAvailableCurrencyRequest $request)
    {
        $availableCurrency = AvailableCurrency::create($request->all());

        return redirect()->route('admin.available-currencies.index');
    }

    public function edit(AvailableCurrency $availableCurrency)
    {
        abort_if(Gate::denies('available_currency_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.availableCurrencies.edit', compact('availableCurrency'));
    }

    public function update(UpdateAvailableCurrencyRequest $request, AvailableCurrency $availableCurrency)
    {
        $availableCurrency->update($request->all());

        return redirect()->route('admin.available-currencies.index');
    }

    public function show(AvailableCurrency $availableCurrency)
    {
        abort_if(Gate::denies('available_currency_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.availableCurrencies.show', compact('availableCurrency'));
    }

    public function destroy(AvailableCurrency $availableCurrency)
    {
        abort_if(Gate::denies('available_currency_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $availableCurrency->delete();

        return back();
    }

    public function massDestroy(MassDestroyAvailableCurrencyRequest $request)
    {
        AvailableCurrency::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
