@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.recentlyViewed.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-RecentlyViewed">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.recentlyViewed.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.recentlyViewed.fields.date_time') }}
                        </th>
                        <th>
                            {{ trans('cruds.recentlyViewed.fields.book') }}
                        </th>
                        <th>
                            {{ trans('cruds.recentlyViewed.fields.ip') }}
                        </th>
                        <th>
                            {{ trans('cruds.recentlyViewed.fields.user') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($recentlyVieweds as $key => $recentlyViewed)
                        <tr data-entry-id="{{ $recentlyViewed->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $recentlyViewed->id ?? '' }}
                            </td>
                            <td>
                                {{ $recentlyViewed->date_time ?? '' }}
                            </td>
                            <td>
                                {{ $recentlyViewed->book->name ?? '' }}
                            </td>
                            <td>
                                {{ $recentlyViewed->ip ?? '' }}
                            </td>
                            <td>
                                {{ $recentlyViewed->user->name ?? '' }}
                            </td>
                            <td>
                                @can('recently_viewed_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.recently-vieweds.show', $recentlyViewed->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('recently_viewed_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.recently-vieweds.edit', $recentlyViewed->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('recently_viewed_delete')
                                    <form action="{{ route('admin.recently-vieweds.destroy', $recentlyViewed->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('recently_viewed_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.recently-vieweds.massDestroy') }}",
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
  let table = $('.datatable-RecentlyViewed:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection