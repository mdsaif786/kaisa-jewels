<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyRecentlyViewedRequest;
use App\Http\Requests\UpdateRecentlyViewedRequest;
use App\Models\Book;
use App\Models\RecentlyViewed;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RecentlyViewedController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('recently_viewed_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $recentlyVieweds = RecentlyViewed::all();

        return view('admin.recentlyVieweds.index', compact('recentlyVieweds'));
    }

    public function edit(RecentlyViewed $recentlyViewed)
    {
        abort_if(Gate::denies('recently_viewed_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $books = Book::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $users = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $recentlyViewed->load('book', 'user');

        return view('admin.recentlyVieweds.edit', compact('books', 'users', 'recentlyViewed'));
    }

    public function update(UpdateRecentlyViewedRequest $request, RecentlyViewed $recentlyViewed)
    {
        $recentlyViewed->update($request->all());

        return redirect()->route('admin.recently-vieweds.index');
    }

    public function show(RecentlyViewed $recentlyViewed)
    {
        abort_if(Gate::denies('recently_viewed_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $recentlyViewed->load('book', 'user');

        return view('admin.recentlyVieweds.show', compact('recentlyViewed'));
    }

    public function destroy(RecentlyViewed $recentlyViewed)
    {
        abort_if(Gate::denies('recently_viewed_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $recentlyViewed->delete();

        return back();
    }

    public function massDestroy(MassDestroyRecentlyViewedRequest $request)
    {
        RecentlyViewed::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
