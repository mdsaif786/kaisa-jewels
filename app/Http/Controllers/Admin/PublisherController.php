<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPublisherRequest;
use App\Http\Requests\StorePublisherRequest;
use App\Http\Requests\UpdatePublisherRequest;
use App\Models\Publisher;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class PublisherController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('publisher_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Publisher::query()->select(sprintf('%s.*', (new Publisher)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'publisher_show';
                $editGate      = 'publisher_edit';
                $deleteGate    = 'publisher_delete';
                $crudRoutePart = 'publishers';

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
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : "";
            });
            $table->editColumn('status', function ($row) {
                return $row->status ? @Publisher::STATUS_SELECT[$row->status] : 'Inactive';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.publishers.index');
    }

    public function create()
    {
        abort_if(Gate::denies('publisher_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.publishers.create');
    }

    public function store(StorePublisherRequest $request)
    {
        $publisher = Publisher::create($request->all());

        return redirect()->route('admin.publishers.index');
    }

    public function edit(Publisher $publisher)
    {
        abort_if(Gate::denies('publisher_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.publishers.edit', compact('publisher'));
    }

    public function update(UpdatePublisherRequest $request, Publisher $publisher)
    {
        $publisher->update($request->all());

        return redirect()->route('admin.publishers.index');
    }

    public function show(Publisher $publisher)
    {
        abort_if(Gate::denies('publisher_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.publishers.show', compact('publisher'));
    }

    public function destroy(Publisher $publisher)
    {
        abort_if(Gate::denies('publisher_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $publisher->delete();

        return back();
    }

    public function massDestroy(MassDestroyPublisherRequest $request)
    {
        Publisher::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
