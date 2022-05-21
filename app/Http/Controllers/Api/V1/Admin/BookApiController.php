<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Http\Resources\Admin\BookResource;
use App\Models\Book;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BookApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('book_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new BookResource(Book::with(['category', 'sub_category', 'book_authors', 'publisher', 'stock_status', 'binding_types', 'language'])->get());
    }

    public function store(StoreBookRequest $request)
    {
        $book = Book::create($request->all());
        $book->binding_types()->sync($request->input('binding_types', []));

        return (new BookResource($book))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Book $book)
    {
        abort_if(Gate::denies('book_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new BookResource($book->load(['category', 'sub_category', 'book_authors', 'publisher', 'stock_status', 'binding_types', 'language']));
    }

    public function update(UpdateBookRequest $request, Book $book)
    {
        $book->update($request->all());
        $book->binding_types()->sync($request->input('binding_types', []));

        return (new BookResource($book))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Book $book)
    {
        abort_if(Gate::denies('book_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $book->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
