<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIndiaShippingChargeRequest;
use App\Http\Requests\UpdateIndiaShippingChargeRequest;
use App\Http\Resources\Admin\IndiaShippingChargeResource;
use App\Models\IndiaShippingCharge;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IndiaShippingChargeApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('india_shipping_charge_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new IndiaShippingChargeResource(IndiaShippingCharge::all());
    }

    public function store(StoreIndiaShippingChargeRequest $request)
    {
        $indiaShippingCharge = IndiaShippingCharge::create($request->all());

        return (new IndiaShippingChargeResource($indiaShippingCharge))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(IndiaShippingCharge $indiaShippingCharge)
    {
        abort_if(Gate::denies('india_shipping_charge_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new IndiaShippingChargeResource($indiaShippingCharge);
    }

    public function update(UpdateIndiaShippingChargeRequest $request, IndiaShippingCharge $indiaShippingCharge)
    {
        $indiaShippingCharge->update($request->all());

        return (new IndiaShippingChargeResource($indiaShippingCharge))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(IndiaShippingCharge $indiaShippingCharge)
    {
        abort_if(Gate::denies('india_shipping_charge_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $indiaShippingCharge->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
