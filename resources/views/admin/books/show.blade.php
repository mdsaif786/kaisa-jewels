@extends('layouts.admin')
@section('title','Show Book')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.book.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-info" href="{{ route('admin.books.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.id') }}
                        </th>
                        <td>
                            {{ $book->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.category') }}
                        </th>
                        <td>
                            {{ $book->category->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.sub_category') }}
                        </th>
                        <td>
                            {{ $book->sub_category->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.name') }}
                        </th>
                        <td>
                            {{ $book->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.description') }}
                        </th>
                        <td>
                            {!! $book->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.image') }}
                        </th>
                        <td>
                           <img src="{{$book->image}}" height="auto" width="100px">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.mrp') }}
                        </th>
                        <td>
                            {{ $book->mrp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.price') }}
                        </th>
                        <td>
                            {{ $book->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.discount') }}
                        </th>
                        <td>
                            {{ $book->discount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.quantity') }}
                        </th>
                        <td>
                            {{ $book->quantity }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.condition') }}
                        </th>
                        <td>
                            {{ $book->condition }}
                        </td>
                    </tr>
                    {{-- <tr>
                        <th>
                            {{ trans('cruds.book.fields.isbn') }}
                        </th>
                        <td>
                            {{ $book->isbn }}
                        </td>
                    </tr> --}}
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.isbn_10') }}
                        </th>
                        <td>
                            {{ $book->isbn_10 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.isbn_30') }}
                        </th>
                        <td>
                            {{ $book->isbn_30 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.weight') }}
                        </th>
                        <td>
                            {{ $book->weight }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.sku') }}
                        </th>
                        <td>
                            {{ $book->sku }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.dimensions') }}
                        </th>
                        <td>
                            {{ $book->dimensions }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.no_of_pages') }}
                        </th>
                        <td>
                            {{ $book->no_of_pages }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.book_type') }}
                        </th>
                        <td>
                            {{ App\Models\Book::BOOK_TYPE_SELECT[$book->book_type] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.book_authors') }}
                        </th>
                        <td>
                            {{ $book->book_authors->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.publisher') }}
                        </th>
                        <td>
                            {{ $book->publisher->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.stock_status') }}
                        </th>
                        <td>
                            {{ $book->stock_status->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.binding_types') }}
                        </th>
                        <td>
                            @foreach($book->binding_types as $key => $binding_types)
                                <span class="label label-info">{{ $binding_types->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.language') }}
                        </th>
                        <td>
                            {{ $book->language->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\Book::STATUS_SELECT[$book->status] ?? 'Inactive' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.publication_city_or_country') }}
                        </th>
                        <td>
                            {{ $book->publication_city_or_country }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.publication_date') }}
                        </th>
                        <td>
                            {{ $book->publication_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.coupon_discount') }}
                        </th>
                        <td>
                            {{ $book->coupon_discount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.no_of_qty_for_discount') }}
                        </th>
                        <td>
                            {{ $book->no_of_qty_for_discount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.coupon_code') }}
                        </th>
                        <td>
                            {{ $book->coupon_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.slug') }}
                        </th>
                        <td>
                            {{ $book->slug }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.meta_keywords') }}
                        </th>
                        <td>
                            {{ $book->meta_keywords }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.meta_description') }}
                        </th>
                        <td>
                            {{ $book->meta_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.handpicked') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $book->handpicked ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.new_arrival') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $book->new_arrival ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.best_sellers') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $book->best_sellers ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.all_time_classic') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $book->all_time_classic ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.book.fields.no_of_viewed') }}
                        </th>
                        <td>
                            {{ $book->no_of_viewed }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-info" href="{{ route('admin.books.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
