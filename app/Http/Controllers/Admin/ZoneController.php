<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyZoneRequest;
use App\Http\Requests\StoreZoneRequest;
use App\Http\Requests\UpdateZoneRequest;
use App\Models\Country;
use App\Models\Zone;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ZoneController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('zone_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Zone::with(['country'])->select(sprintf('%s.*', (new Zone)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'zone_show';
                $editGate      = 'zone_edit';
                $deleteGate    = 'zone_delete';
                $crudRoutePart = 'zones';

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

            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : "";
            });
            $table->editColumn('code', function ($row) {
                return $row->code ? $row->code : "";
            });
            $table->editColumn('status', function ($row) {
                return $row->status ? Zone::STATUS_SELECT[$row->status] : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'country']);

            return $table->make(true);
        }

        return view('admin.zones.index');
    }

    public function create()
    {
        abort_if(Gate::denies('zone_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $countries = Country::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.zones.create', compact('countries'));
    }

    public function store(StoreZoneRequest $request)
    {
        $zone = Zone::create($request->all());

        return redirect()->route('admin.zones.index');
    }

    public function edit(Zone $zone)
    {
        abort_if(Gate::denies('zone_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $countries = Country::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $zone->load('country');

        return view('admin.zones.edit', compact('countries', 'zone'));
    }

    public function update(UpdateZoneRequest $request, Zone $zone)
    {
        $zone->update($request->all());

        return redirect()->route('admin.zones.index');
    }

    public function show(Zone $zone)
    {
        abort_if(Gate::denies('zone_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $zone->load('country');

        return view('admin.zones.show', compact('zone'));
    }

    public function destroy(Zone $zone)
    {
        abort_if(Gate::denies('zone_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $zone->delete();

        return back();
    }

    public function massDestroy(MassDestroyZoneRequest $request)
    {
        Zone::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
