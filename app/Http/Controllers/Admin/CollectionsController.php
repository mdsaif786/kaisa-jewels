<?php

namespace App\Http\Controllers\Admin;

use Gate;
use App\Models\Book;
use App\Models\Collection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreCollectionRequest;
use App\Http\Requests\UpdateCollectionRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\MassDestroyCollectionRequest;

class CollectionsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('collection_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $collections = Collection::all();

        return view('admin.collections.index', compact('collections'));
    }

    public function create()
    {
        abort_if(Gate::denies('collection_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $collection_books = Book::all()->pluck('name', 'id');

        return view('admin.collections.create', compact('collection_books'));
    }

    public function store(StoreCollectionRequest $request)
    {
        $data=$request->all();
        if ($request->has('banner_image')) {
            $path = Storage::disk('s3')->put('sliderImages', $request->banner_image);
            $data['banner_image']= Storage::disk('s3')->url($path);
        }

        $collection = Collection::create($data);
        $collection->collection_books()->sync($request->input('collection_books', []));

        return redirect()->route('admin.collections.index');
    }

    public function edit(Collection $collection)
    {
        abort_if(Gate::denies('collection_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $collection_books = Book::all()->pluck('name', 'id');

        $collection->load('collection_books');

        return view('admin.collections.edit', compact('collection_books', 'collection'));
    }

    public function update(UpdateCollectionRequest $request, Collection $collection)
    {
        $data=$request->all();
        if ($request->has('banner_image')) {
            $path = Storage::disk('s3')->put('sliderImages', $request->banner_image);
            $data['banner_image']= Storage::disk('s3')->url($path);
        }

        $collection->update($data);
        $collection->collection_books()->sync($request->input('collection_books', []));

        return redirect()->route('admin.collections.index');
    }

    public function show(Collection $collection)
    {
        abort_if(Gate::denies('collection_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $collection->load('collection_books');

        return view('admin.collections.show', compact('collection'));
    }

    public function destroy(Collection $collection)
    {
        abort_if(Gate::denies('collection_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $collection->delete();

        return back();
    }

    public function massDestroy(MassDestroyCollectionRequest $request)
    {
        Collection::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
