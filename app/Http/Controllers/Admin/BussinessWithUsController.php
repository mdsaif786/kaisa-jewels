<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyBussinessWithUsRequest;
use App\Http\Requests\StoreBussinessWithUsRequest;
use App\Http\Requests\UpdateBussinessWithUsRequest;
use App\Models\BussinessWithUs;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BussinessWithUsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('bussiness_with_us_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $bussinessWithuses = BussinessWithUs::all();

        return view('admin.bussinessWithuses.index', compact('bussinessWithuses'));
    }

    public function create()
    {
        abort_if(Gate::denies('bussiness_with_us_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.bussinessWithuses.create');
    }

    public function store(StoreBussinessWithUsRequest $request)
    {
        $bussinessWithUs = BussinessWithUs::create($request->all());

        return redirect()->route('admin.bussiness-withuses.index');
    }

    public function edit(BussinessWithUs $bussinessWithUs)
    {
        abort_if(Gate::denies('bussiness_with_us_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.bussinessWithuses.edit', compact('bussinessWithUs'));
    }

    public function update(UpdateBussinessWithUsRequest $request, BussinessWithUs $bussinessWithUs)
    {
        $bussinessWithUs->update($request->all());

        return redirect()->route('admin.bussiness-withuses.index');
    }

    public function show(BussinessWithUs $bussinessWithUs, $id)
    {
        $bussinessWithUs=BussinessWithUs::find($id);
        abort_if(Gate::denies('bussiness_with_us_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.bussinessWithuses.show', compact('bussinessWithUs'));
    }

    public function destroy(BussinessWithUs $bussinessWithUs)
    {
        abort_if(Gate::denies('bussiness_with_us_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $bussinessWithUs->delete();

        return back();
    }

    public function massDestroy(MassDestroyBussinessWithUsRequest $request)
    {
        BussinessWithUs::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
