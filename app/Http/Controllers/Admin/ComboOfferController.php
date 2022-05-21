<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyComboOfferRequest;
use App\Http\Requests\StoreComboOfferRequest;
use App\Http\Requests\UpdateComboOfferRequest;
use App\Models\Book;
use App\Models\BookCategory;
use App\Models\ComboOffer;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ComboOfferController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('combo_offer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = ComboOffer::with(['category', 'sub_category', 'combo_offer_books'])->select(sprintf('%s.*', (new ComboOffer)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'combo_offer_show';
                $editGate      = 'combo_offer_edit';
                $deleteGate    = 'combo_offer_delete';
                $crudRoutePart = 'combo-offers';

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
            $table->addColumn('category_name', function ($row) {
                return $row->category ? $row->category->name : '';
            });

            $table->addColumn('sub_category_name', function ($row) {
                return $row->sub_category ? $row->sub_category->name : '';
            });

            $table->editColumn('price', function ($row) {
                return $row->price ? $row->price : "";
            });

            $table->rawColumns(['actions', 'placeholder', 'category', 'sub_category']);

            return $table->make(true);
        }

        return view('admin.comboOffers.index');
    }

    public function create()
    {
        abort_if(Gate::denies('combo_offer_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = BookCategory::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $sub_categories = BookCategory::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $combo_offer_books = Book::all()->pluck('name', 'id');

        return view('admin.comboOffers.create', compact('categories', 'sub_categories', 'combo_offer_books'));
    }

    public function store(StoreComboOfferRequest $request)
    {
        $comboOffer = ComboOffer::create($request->all());
        $comboOffer->combo_offer_books()->sync($request->input('combo_offer_books', []));

        return redirect()->route('admin.combo-offers.index');
    }

    public function edit(ComboOffer $comboOffer)
    {
        abort_if(Gate::denies('combo_offer_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = BookCategory::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $sub_categories = BookCategory::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $combo_offer_books = Book::all()->pluck('name', 'id');

        $comboOffer->load('category', 'sub_category', 'combo_offer_books');

        return view('admin.comboOffers.edit', compact('categories', 'sub_categories', 'combo_offer_books', 'comboOffer'));
    }

    public function update(UpdateComboOfferRequest $request, ComboOffer $comboOffer)
    {
        $comboOffer->update($request->all());
        $comboOffer->combo_offer_books()->sync($request->input('combo_offer_books', []));

        return redirect()->route('admin.combo-offers.index');
    }

    public function show(ComboOffer $comboOffer)
    {
        abort_if(Gate::denies('combo_offer_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $comboOffer->load('category', 'sub_category', 'combo_offer_books');

        return view('admin.comboOffers.show', compact('comboOffer'));
    }

    public function destroy(ComboOffer $comboOffer)
    {
        abort_if(Gate::denies('combo_offer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $comboOffer->delete();

        return back();
    }

    public function massDestroy(MassDestroyComboOfferRequest $request)
    {
        ComboOffer::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
