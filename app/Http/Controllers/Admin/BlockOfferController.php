<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyBlockOfferRequest;
use App\Http\Requests\StoreBlockOfferRequest;
use App\Http\Requests\UpdateBlockOfferRequest;
use App\Models\BlockOffer;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BlockOfferController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('block_offer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $blockOffers = BlockOffer::all();

        return view('admin.blockOffers.index', compact('blockOffers'));
    }

    public function create()
    {
        abort_if(Gate::denies('block_offer_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.blockOffers.create');
    }

    public function store(StoreBlockOfferRequest $request)
    {
        $blockOffer = BlockOffer::create($request->all());

        return redirect()->route('admin.block-offers.index');
    }

    public function edit(BlockOffer $blockOffer)
    {
        abort_if(Gate::denies('block_offer_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.blockOffers.edit', compact('blockOffer'));
    }

    public function update(UpdateBlockOfferRequest $request, BlockOffer $blockOffer)
    {
        $blockOffer->update($request->all());

        return redirect()->route('admin.block-offers.index');
    }

    public function show(BlockOffer $blockOffer)
    {
        abort_if(Gate::denies('block_offer_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.blockOffers.show', compact('blockOffer'));
    }

    public function destroy(BlockOffer $blockOffer)
    {
        abort_if(Gate::denies('block_offer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $blockOffer->delete();

        return back();
    }

    public function massDestroy(MassDestroyBlockOfferRequest $request)
    {
        BlockOffer::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
