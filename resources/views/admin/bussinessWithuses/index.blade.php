@extends('layouts.admin')
@section('title','Business WithUs Lists');
@section('content')
{{-- @can('bussiness_with_us_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.bussiness-withuses.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.bussinessWithUs.title_singular') }}
            </a>
        </div>
    </div>
@endcan --}}
<div class="card">
    <div class="card-header">
        {{ trans('cruds.bussinessWithUs.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-BussinessWithUs">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.bussinessWithUs.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.bussinessWithUs.fields.full_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.bussinessWithUs.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.bussinessWithUs.fields.message') }}
                        </th>
                        <th>
                            {{ trans('cruds.bussinessWithUs.fields.company_name') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bussinessWithuses as $key => $bussinessWithUs)
                        <tr data-entry-id="{{ $bussinessWithUs->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $bussinessWithUs->id ?? '' }}
                            </td>
                            <td>
                                {{ $bussinessWithUs->full_name ?? '' }}
                            </td>
                            <td>
                                {{ $bussinessWithUs->email ?? '' }}
                            </td>
                            <td>
                                {{ $bussinessWithUs->message ?? '' }}
                            </td>
                            <td>
                                {{ $bussinessWithUs->company_name ?? '' }}
                            </td>
                            <td>
                                @can('bussiness_with_us_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.bussiness-withuses.show', $bussinessWithUs->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                {{-- @can('bussiness_with_us_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.bussiness-withuses.edit', $bussinessWithUs->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan --}}

                                @can('bussiness_with_us_delete')
                                    <form action="{{ route('admin.bussiness-withuses.destroy', $bussinessWithUs->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('bussiness_with_us_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.bussiness-withuses.massDestroy') }}",
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
  let table = $('.datatable-BussinessWithUs:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection
