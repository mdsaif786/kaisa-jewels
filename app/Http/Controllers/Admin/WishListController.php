<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyWishListRequest;
use App\Http\Requests\StoreWishListRequest;
use App\Http\Requests\UpdateWishListRequest;
use App\Models\Book;
use App\Models\User;
use App\Models\WishList;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class WishListController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('wish_list_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = WishList::with(['user', 'book'])->select(sprintf('%s.*', (new WishList)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'wish_list_show';
                $editGate      = 'wish_list_edit';
                $deleteGate    = 'wish_list_delete';
                $crudRoutePart = 'wish-lists';

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
            $table->addColumn('user_name', function ($row) {
                return $row->user ? $row->user->name : '';
            });

            $table->editColumn('ip', function ($row) {
                return $row->ip ? $row->ip : "";
            });
            $table->addColumn('book_name', function ($row) {
                return $row->book ? $row->book->name : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'user', 'book']);

            return $table->make(true);
        }

        return view('admin.wishLists.index');
    }

    public function create()
    {
        abort_if(Gate::denies('wish_list_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $books = Book::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.wishLists.create', compact('users', 'books'));
    }

    public function store(StoreWishListRequest $request)
    {
        $wishList = WishList::create($request->all());

        return redirect()->route('admin.wish-lists.index');
    }

    public function edit(WishList $wishList)
    {
        abort_if(Gate::denies('wish_list_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $books = Book::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $wishList->load('user', 'book');

        return view('admin.wishLists.edit', compact('users', 'books', 'wishList'));
    }

    public function update(UpdateWishListRequest $request, WishList $wishList)
    {
        $wishList->update($request->all());

        return redirect()->route('admin.wish-lists.index');
    }

    public function show(WishList $wishList)
    {
        abort_if(Gate::denies('wish_list_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $wishList->load('user', 'book');

        return view('admin.wishLists.show', compact('wishList'));
    }

    public function destroy(WishList $wishList)
    {
        abort_if(Gate::denies('wish_list_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $wishList->delete();

        return back();
    }

    public function massDestroy(MassDestroyWishListRequest $request)
    {
        WishList::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
