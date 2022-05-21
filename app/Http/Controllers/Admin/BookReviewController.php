<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyBookReviewRequest;
use App\Http\Requests\StoreBookReviewRequest;
use App\Http\Requests\UpdateBookReviewRequest;
use App\Models\Book;
use App\Models\BookReview;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BookReviewController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('book_review_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $bookReviews = BookReview::with(['user','book'])->get();

        return view('admin.bookReviews.index', compact('bookReviews'));
    }

    public function create()
    {
        abort_if(Gate::denies('book_review_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $books = Book::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $users = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.bookReviews.create', compact('books', 'users'));
    }

    public function store(StoreBookReviewRequest $request)
    {
        $bookReview = BookReview::create($request->all());

        return redirect()->route('admin.book-reviews.index');
    }

    public function edit(BookReview $bookReview)
    {
        abort_if(Gate::denies('book_review_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $books = Book::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $users = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $bookReview->load('book', 'user');

        return view('admin.bookReviews.edit', compact('books', 'users', 'bookReview'));
    }

    public function update(UpdateBookReviewRequest $request, BookReview $bookReview)
    {
        $bookReview->update($request->all());

        return redirect()->route('admin.book-reviews.index');
    }

    public function show(BookReview $bookReview)
    {
        abort_if(Gate::denies('book_review_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $bookReview->load('book', 'user');

        return view('admin.bookReviews.show', compact('bookReview'));
    }

    public function destroy(BookReview $bookReview)
    {
        abort_if(Gate::denies('book_review_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $bookReview->delete();

        return back();
    }

    public function massDestroy(MassDestroyBookReviewRequest $request)
    {
        BookReview::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
