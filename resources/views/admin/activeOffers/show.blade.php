@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.activeOffer.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.active-offers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.activeOffer.fields.id') }}
                        </th>
                        <td>
                            {{ $activeOffer->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.activeOffer.fields.offer_title') }}
                        </th>
                        <td>
                            {{ $activeOffer->offer_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.activeOffer.fields.banner_image') }}
                        </th>
                        <td>
                            {{ $activeOffer->banner_image }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.activeOffer.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\ActiveOffer::STATUS_SELECT[$activeOffer->status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.activeOffer.fields.discount_bracket') }}
                        </th>
                        <td>
                            {{ $activeOffer->discount_bracket }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.active-offers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection