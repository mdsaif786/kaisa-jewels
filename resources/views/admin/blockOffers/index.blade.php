@extends('layouts.admin')
@section('content')
@can('block_offer_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.block-offers.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.blockOffer.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.blockOffer.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-BlockOffer">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.blockOffer.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.blockOffer.fields.title') }}
                        </th>
                        <th>
                            {{ trans('cruds.blockOffer.fields.offer_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.blockOffer.fields.general_discount') }}
                        </th>
                        <th>
                            {{ trans('cruds.blockOffer.fields.status') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blockOffers as $key => $blockOffer)
                        <tr data-entry-id="{{ $blockOffer->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $blockOffer->id ?? '' }}
                            </td>
                            <td>
                                {{ $blockOffer->title ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\BlockOffer::OFFER_TYPE_SELECT[$blockOffer->offer_type] ?? '' }}
                            </td>
                            <td>
                                {{ $blockOffer->general_discount ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\BlockOffer::STATUS_SELECT[$blockOffer->status] ?? '' }}
                            </td>
                            <td>
                                @can('block_offer_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.block-offers.show', $blockOffer->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('block_offer_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.block-offers.edit', $blockOffer->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('block_offer_delete')
                                    <form action="{{ route('admin.block-offers.destroy', $blockOffer->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('block_offer_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.block-offers.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-BlockOffer:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection