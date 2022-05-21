@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.priceBlock.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.price-blocks.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.priceBlock.fields.id') }}
                        </th>
                        <td>
                            {{ $priceBlock->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.priceBlock.fields.block_title') }}
                        </th>
                        <td>
                            {{ $priceBlock->block_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.priceBlock.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\PriceBlock::STATUS_SELECT[$priceBlock->status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.priceBlock.fields.set_order') }}
                        </th>
                        <td>
                            {{ $priceBlock->set_order }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.price-blocks.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection