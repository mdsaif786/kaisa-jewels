<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyBookCategoryRequest;
use App\Http\Requests\StoreBookCategoryRequest;
use App\Http\Requests\UpdateBookCategoryRequest;
use App\Models\BookCategory;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class BookCategoryController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('book_category_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = BookCategory::with(['parent_category'])->select(sprintf('%s.*', (new BookCategory)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'book_category_show';
                $editGate      = 'book_category_edit';
                $deleteGate    = 'book_category_delete';
                $crudRoutePart = 'book-categories';

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
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : "";
            });
            $table->addColumn('parent_category_name', function ($row) {
                return $row->parent_category ? $row->parent_category->name : '';
            });

            $table->editColumn('status', function ($row) {
                return $row->status ? BookCategory::STATUS_SELECT[$row->status] : '';
            });
            $table->editColumn('set_order', function ($row) {
                return $row->set_order ? $row->set_order : "";
            });

            $table->rawColumns(['actions', 'placeholder', 'parent_category']);

            return $table->make(true);
        }

        return view('admin.bookCategories.index');
    }

    public function create()
    {
        abort_if(Gate::denies('book_category_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $parent_categories = BookCategory::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.bookCategories.create', compact('parent_categories'));
    }

    public function store(StoreBookCategoryRequest $request)
    {
        $bookCategory = BookCategory::create($request->all());

        return redirect()->route('admin.book-categories.index');
    }

    public function edit(BookCategory $bookCategory)
    {
        abort_if(Gate::denies('book_category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $parent_categories = BookCategory::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $bookCategory->load('parent_category');

        return view('admin.bookCategories.edit', compact('parent_categories', 'bookCategory'));
    }

    public function update(UpdateBookCategoryRequest $request, BookCategory $bookCategory)
    {
        $bookCategory->update($request->all());

        return redirect()->route('admin.book-categories.index');
    }

    public function show(BookCategory $bookCategory)
    {
        abort_if(Gate::denies('book_category_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $bookCategory->load('parent_category');

        return view('admin.bookCategories.show', compact('bookCategory'));
    }

    public function destroy(BookCategory $bookCategory)
    {
        abort_if(Gate::denies('book_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $bookCategory->delete();

        return back();
    }

    public function massDestroy(MassDestroyBookCategoryRequest $request)
    {
        BookCategory::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
