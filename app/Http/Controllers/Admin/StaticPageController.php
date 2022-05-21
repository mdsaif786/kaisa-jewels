<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyStaticPageRequest;
use App\Http\Requests\StoreStaticPageRequest;
use App\Http\Requests\UpdateStaticPageRequest;
use App\Models\StaticPage;
use App\Models\StaticPageType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StaticPageController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('static_page_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $staticPages = StaticPage::all();

        return view('admin.staticPages.index', compact('staticPages'));
    }

    public function create()
    {
        abort_if(Gate::denies('static_page_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $static_page_types = StaticPageType::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.staticPages.create', compact('static_page_types'));
    }

    public function store(StoreStaticPageRequest $request)
    {
        $staticPage = StaticPage::create($request->all());

        return redirect()->route('admin.static-pages.index');
    }

    public function edit(StaticPage $staticPage)
    {
        abort_if(Gate::denies('static_page_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $static_page_types = StaticPageType::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $staticPage->load('static_page_type');

        return view('admin.staticPages.edit', compact('static_page_types', 'staticPage'));
    }

    public function update(UpdateStaticPageRequest $request, StaticPage $staticPage)
    {
        $staticPage->update($request->all());

        return redirect()->route('admin.static-pages.index');
    }

    public function show(StaticPage $staticPage)
    {
        abort_if(Gate::denies('static_page_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $staticPage->load('static_page_type');

        return view('admin.staticPages.show', compact('staticPage'));
    }

    public function destroy(StaticPage $staticPage)
    {
        abort_if(Gate::denies('static_page_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $staticPage->delete();

        return back();
    }

    public function massDestroy(MassDestroyStaticPageRequest $request)
    {
        StaticPage::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
