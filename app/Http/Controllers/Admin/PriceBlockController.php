<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPriceBlockRequest;
use App\Http\Requests\StorePriceBlockRequest;
use App\Http\Requests\UpdatePriceBlockRequest;
use App\Models\PriceBlock;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PriceBlockController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('price_block_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $priceBlocks = PriceBlock::all();

        return view('admin.priceBlocks.index', compact('priceBlocks'));
    }

    public function create()
    {
        abort_if(Gate::denies('price_block_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.priceBlocks.create');
    }

    public function store(StorePriceBlockRequest $request)
    {
        $priceBlock = PriceBlock::create($request->all());

        return redirect()->route('admin.price-blocks.index');
    }

    public function edit(PriceBlock $priceBlock)
    {
        abort_if(Gate::denies('price_block_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.priceBlocks.edit', compact('priceBlock'));
    }

    public function update(UpdatePriceBlockRequest $request, PriceBlock $priceBlock)
    {
        $priceBlock->update($request->all());

        return redirect()->route('admin.price-blocks.index');
    }

    public function show(PriceBlock $priceBlock)
    {
        abort_if(Gate::denies('price_block_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.priceBlocks.show', compact('priceBlock'));
    }

    public function destroy(PriceBlock $priceBlock)
    {
        abort_if(Gate::denies('price_block_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $priceBlock->delete();

        return back();
    }

    public function massDestroy(MassDestroyPriceBlockRequest $request)
    {
        PriceBlock::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
