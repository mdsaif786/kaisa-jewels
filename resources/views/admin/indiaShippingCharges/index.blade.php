@extends('layouts.admin')
@section('content')
@can('india_shipping_charge_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.india-shipping-charges.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.indiaShippingCharge.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'IndiaShippingCharge', 'route' => 'admin.india-shipping-charges.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.indiaShippingCharge.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-IndiaShippingCharge">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.indiaShippingCharge.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.indiaShippingCharge.fields.pincode') }}
                    </th>
                    <th>
                        {{ trans('cruds.indiaShippingCharge.fields.hq_rate_per_kg') }}
                    </th>
                    <th>
                        {{ trans('cruds.indiaShippingCharge.fields.other_rate') }}
                    </th>
                    <th>
                        {{ trans('cruds.indiaShippingCharge.fields.cod_rate') }}
                    </th>
                    <th>
                        {{ trans('cruds.indiaShippingCharge.fields.total_amount') }}
                    </th>
                    <th>
                        &nbsp;
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('india_shipping_charge_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.india-shipping-charges.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
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

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.india-shipping-charges.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'pincode', name: 'pincode' },
{ data: 'hq_rate_per_kg', name: 'hq_rate_per_kg' },
{ data: 'other_rate', name: 'other_rate' },
{ data: 'cod_rate', name: 'cod_rate' },
{ data: 'total_amount', name: 'total_amount' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-IndiaShippingCharge').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection