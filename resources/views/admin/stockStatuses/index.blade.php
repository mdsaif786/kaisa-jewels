@extends('layouts.admin')
@section('content')
@can('stock_status_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.stock-statuses.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.stockStatus.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.stockStatus.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-StockStatus">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.stockStatus.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.stockStatus.fields.name') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($stockStatuses as $key => $stockStatus)
                        <tr data-entry-id="{{ $stockStatus->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $stockStatus->id ?? '' }}
                            </td>
                            <td>
                                {{ $stockStatus->name ?? '' }}
                            </td>
                            <td>
                                @can('stock_status_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.stock-statuses.show', $stockStatus->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('stock_status_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.stock-statuses.edit', $stockStatus->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('stock_status_delete')
                                    <form action="{{ route('admin.stock-statuses.destroy', $stockStatus->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('stock_status_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.stock-statuses.massDestroy') }}",
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
  let table = $('.datatable-StockStatus:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection