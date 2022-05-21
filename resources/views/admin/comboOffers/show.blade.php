@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.comboOffer.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.combo-offers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.comboOffer.fields.id') }}
                        </th>
                        <td>
                            {{ $comboOffer->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comboOffer.fields.offer_title') }}
                        </th>
                        <td>
                            {{ $comboOffer->offer_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comboOffer.fields.category') }}
                        </th>
                        <td>
                            {{ $comboOffer->category->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comboOffer.fields.sub_category') }}
                        </th>
                        <td>
                            {{ $comboOffer->sub_category->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comboOffer.fields.price') }}
                        </th>
                        <td>
                            {{ $comboOffer->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comboOffer.fields.discount_amount') }}
                        </th>
                        <td>
                            {{ $comboOffer->discount_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comboOffer.fields.discount_percentage') }}
                        </th>
                        <td>
                            {{ $comboOffer->discount_percentage }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comboOffer.fields.combo_offer_book') }}
                        </th>
                        <td>
                            @foreach($comboOffer->combo_offer_books as $key => $combo_offer_book)
                                <span class="label label-info">{{ $combo_offer_book->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.combo-offers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection