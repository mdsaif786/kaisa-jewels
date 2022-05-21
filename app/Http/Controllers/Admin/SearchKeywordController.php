<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySearchKeywordRequest;
use App\Http\Requests\UpdateSearchKeywordRequest;
use App\Models\SearchKeyword;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class SearchKeywordController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('search_keyword_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = SearchKeyword::with(['user'])->select(sprintf('%s.*', (new SearchKeyword)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'search_keyword_show';
                $editGate      = 'search_keyword_edit';
                $deleteGate    = 'search_keyword_delete';
                $crudRoutePart = 'search-keywords';

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
            $table->editColumn('keyword_name', function ($row) {
                return $row->keyword_name ? $row->keyword_name : "";
            });
            $table->editColumn('ip', function ($row) {
                return $row->ip ? $row->ip : "";
            });
            $table->addColumn('user_name', function ($row) {
                return $row->user ? $row->user->name : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'user']);

            return $table->make(true);
        }

        return view('admin.searchKeywords.index');
    }

    public function edit(SearchKeyword $searchKeyword)
    {
        abort_if(Gate::denies('search_keyword_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $searchKeyword->load('user');

        return view('admin.searchKeywords.edit', compact('users', 'searchKeyword'));
    }

    public function update(UpdateSearchKeywordRequest $request, SearchKeyword $searchKeyword)
    {
        $searchKeyword->update($request->all());

        return redirect()->route('admin.search-keywords.index');
    }

    public function show(SearchKeyword $searchKeyword)
    {
        abort_if(Gate::denies('search_keyword_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $searchKeyword->load('user');

        return view('admin.searchKeywords.show', compact('searchKeyword'));
    }

    public function destroy(SearchKeyword $searchKeyword)
    {
        abort_if(Gate::denies('search_keyword_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $searchKeyword->delete();

        return back();
    }

    public function massDestroy(MassDestroySearchKeywordRequest $request)
    {
        SearchKeyword::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
