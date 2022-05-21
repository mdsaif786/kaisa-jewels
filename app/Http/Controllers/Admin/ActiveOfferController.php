<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyActiveOfferRequest;
use App\Http\Requests\StoreActiveOfferRequest;
use App\Http\Requests\UpdateActiveOfferRequest;
use App\Models\ActiveOffer;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ActiveOfferController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('active_offer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = ActiveOffer::query()->select(sprintf('%s.*', (new ActiveOffer)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'active_offer_show';
                $editGate      = 'active_offer_edit';
                $deleteGate    = 'active_offer_delete';
                $crudRoutePart = 'active-offers';

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
            $table->editColumn('offer_title', function ($row) {
                return $row->offer_title ? $row->offer_title : "";
            });
            $table->editColumn('status', function ($row) {
                return $row->status ? ActiveOffer::STATUS_SELECT[$row->status] : '';
            });
            $table->editColumn('discount_bracket', function ($row) {
                return $row->discount_bracket ? $row->discount_bracket : "";
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.activeOffers.index');
    }

    public function create()
    {
        abort_if(Gate::denies('active_offer_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.activeOffers.create');
    }

    public function store(StoreActiveOfferRequest $request)
    {
        $activeOffer = ActiveOffer::create($request->all());

        return redirect()->route('admin.active-offers.index');
    }

    public function edit(ActiveOffer $activeOffer)
    {
        abort_if(Gate::denies('active_offer_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.activeOffers.edit', compact('activeOffer'));
    }

    public function update(UpdateActiveOfferRequest $request, ActiveOffer $activeOffer)
    {
        $activeOffer->update($request->all());

        return redirect()->route('admin.active-offers.index');
    }

    public function show(ActiveOffer $activeOffer)
    {
        abort_if(Gate::denies('active_offer_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.activeOffers.show', compact('activeOffer'));
    }

    public function destroy(ActiveOffer $activeOffer)
    {
        abort_if(Gate::denies('active_offer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $activeOffer->delete();

        return back();
    }

    public function massDestroy(MassDestroyActiveOfferRequest $request)
    {
        $x=ActiveOffer::whereIn('id', request('ids'))->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
