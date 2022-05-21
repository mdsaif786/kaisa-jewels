<?php

namespace App\Http\Controllers\Admin;

use Gate;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateBlogRequest;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\MassDestroyBlogRequest;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('blog_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Blog::with(['blog_category'])->select(sprintf('%s.*', (new Blog)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'blog_show';
                $editGate      = 'blog_edit';
                $deleteGate    = 'blog_delete';
                $crudRoutePart = 'blogs';

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
            $table->editColumn('title', function ($row) {
                return $row->title ? $row->title : "";
            });
            $table->editColumn('status', function ($row) {
                return $row->status ? Blog::STATUS_SELECT[$row->status] : '';
            });
            $table->editColumn('no_of_view', function ($row) {
                return $row->no_of_view ? $row->no_of_view : "";
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.blogs.index');
    }

    public function create()
    {
        abort_if(Gate::denies('blog_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $blog_categories = BlogCategory::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.blogs.create', compact('blog_categories'));
    }

    public function store(StoreBlogRequest $request)
    {
        $data=$request->all();

        if (!$request->slug) {
            $data['slug']=BlogCategory::generateSlug($request->title);
        } else {
            $data['slug']=BlogCategory::generateSlug($request->slug);
        }

        if ($request->has('image')) {
            $path = Storage::disk('s3')->put('blogImages', $request->image);
            $data['image']= Storage::disk('s3')->url($path);
        }

        $blog = Blog::create($data);

        return redirect()->route('admin.blogs.index');
    }

    public function edit(Blog $blog)
    {
        abort_if(Gate::denies('blog_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $blog_categories = BlogCategory::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $blog->load('blog_category');

        return view('admin.blogs.edit', compact('blog_categories', 'blog'));
    }

    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $data=$request->all();

        if (!$request->slug) {
            $data['slug']=BlogCategory::generateSlug($request->title);
        } else {
            $data['slug']=BlogCategory::generateSlug($request->slug);
        }

        if ($request->has('image')) {
            $path = Storage::disk('s3')->put('blogImages', $request->image);
            $data['image']= Storage::disk('s3')->url($path);
        }

        $blog->update($data);

        return redirect()->route('admin.blogs.index');
    }

    public function show(Blog $blog)
    {
        abort_if(Gate::denies('blog_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $blog->load('blog_category');

        return view('admin.blogs.show', compact('blog'));
    }

    public function destroy(Blog $blog)
    {
        abort_if(Gate::denies('blog_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $blog->delete();

        return back();
    }

    public function massDestroy(MassDestroyBlogRequest $request)
    {
        Blog::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
