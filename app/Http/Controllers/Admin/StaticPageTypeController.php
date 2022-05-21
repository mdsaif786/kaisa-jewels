<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyStaticPageTypeRequest;
use App\Http\Requests\StoreStaticPageTypeRequest;
use App\Http\Requests\UpdateStaticPageTypeRequest;
use App\Models\StaticPageType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StaticPageTypeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('static_page_type_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $staticPageTypes = StaticPageType::all();

        return view('admin.staticPageTypes.index', compact('staticPageTypes'));
    }

    public function create()
    {
        abort_if(Gate::denies('static_page_type_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.staticPageTypes.create');
    }

    public function store(StoreStaticPageTypeRequest $request)
    {
        $staticPageType = StaticPageType::create($request->all());

        return redirect()->route('admin.static-page-types.index');
    }

    public function edit(StaticPageType $staticPageType)
    {
        abort_if(Gate::denies('static_page_type_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.staticPageTypes.edit', compact('staticPageType'));
    }

    public function update(UpdateStaticPageTypeRequest $request, StaticPageType $staticPageType)
    {
        $staticPageType->update($request->all());

        return redirect()->route('admin.static-page-types.index');
    }

    public function show(StaticPageType $staticPageType)
    {
        abort_if(Gate::denies('static_page_type_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.staticPageTypes.show', compact('staticPageType'));
    }

    public function destroy(StaticPageType $staticPageType)
    {
        abort_if(Gate::denies('static_page_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $staticPageType->delete();

        return back();
    }

    public function massDestroy(MassDestroyStaticPageTypeRequest $request)
    {
        StaticPageType::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
