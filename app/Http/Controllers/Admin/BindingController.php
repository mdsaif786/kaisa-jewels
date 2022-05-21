<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyBindingRequest;
use App\Http\Requests\StoreBindingRequest;
use App\Http\Requests\UpdateBindingRequest;
use App\Models\Binding;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class BindingController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('binding_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Binding::query()->select(sprintf('%s.*', (new Binding)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'binding_show';
                $editGate      = 'binding_edit';
                $deleteGate    = 'binding_delete';
                $crudRoutePart = 'bindings';

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
                return $row->status ? Binding::STATUS_SELECT[$row->status] : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.bindings.index');
    }

    public function create()
    {
        abort_if(Gate::denies('binding_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.bindings.create');
    }

    public function store(StoreBindingRequest $request)
    {
        $binding = Binding::create($request->all());

        return redirect()->route('admin.bindings.index');
    }

    public function edit(Binding $binding)
    {
        abort_if(Gate::denies('binding_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.bindings.edit', compact('binding'));
    }

    public function update(UpdateBindingRequest $request, Binding $binding)
    {
        $binding->update($request->all());

        return redirect()->route('admin.bindings.index');
    }

    public function show(Binding $binding)
    {
        abort_if(Gate::denies('binding_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.bindings.show', compact('binding'));
    }

    public function destroy(Binding $binding)
    {
        abort_if(Gate::denies('binding_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $binding->delete();

        return back();
    }

    public function massDestroy(MassDestroyBindingRequest $request)
    {
        Binding::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
