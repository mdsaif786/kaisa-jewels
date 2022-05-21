@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.blockOffer.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.block-offers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.blockOffer.fields.id') }}
                        </th>
                        <td>
                            {{ $blockOffer->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.blockOffer.fields.title') }}
                        </th>
                        <td>
                            {{ $blockOffer->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.blockOffer.fields.offer_type') }}
                        </th>
                        <td>
                            {{ App\Models\BlockOffer::OFFER_TYPE_SELECT[$blockOffer->offer_type] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.blockOffer.fields.general_discount') }}
                        </th>
                        <td>
                            {{ $blockOffer->general_discount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.blockOffer.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\BlockOffer::STATUS_SELECT[$blockOffer->status] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.block-offers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection