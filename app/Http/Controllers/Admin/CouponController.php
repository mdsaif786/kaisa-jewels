<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCouponRequest;
use App\Http\Requests\StoreCouponRequest;
use App\Http\Requests\UpdateCouponRequest;
use App\Models\BookCategory;
use App\Models\Coupon;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CouponController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('coupon_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $coupons = Coupon::all();

        return view('admin.coupons.index', compact('coupons'));
    }

    public function create()
    {
        abort_if(Gate::denies('coupon_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $book_categories = BookCategory::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.coupons.create', compact('book_categories'));
    }

    public function store(StoreCouponRequest $request)
    {
        $coupon = Coupon::create($request->all());

        return redirect()->route('admin.coupons.index');
    }

    public function edit(Coupon $coupon)
    {
        abort_if(Gate::denies('coupon_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $book_categories = BookCategory::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $coupon->load('book_category');

        return view('admin.coupons.edit', compact('book_categories', 'coupon'));
    }

    public function update(UpdateCouponRequest $request, Coupon $coupon)
    {
        $coupon->update($request->all());

        return redirect()->route('admin.coupons.index');
    }

    public function show(Coupon $coupon)
    {
        abort_if(Gate::denies('coupon_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $coupon->load('book_category');

        return view('admin.coupons.show', compact('coupon'));
    }

    public function destroy(Coupon $coupon)
    {
        abort_if(Gate::denies('coupon_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $coupon->delete();

        return back();
    }

    public function massDestroy(MassDestroyCouponRequest $request)
    {
        Coupon::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
