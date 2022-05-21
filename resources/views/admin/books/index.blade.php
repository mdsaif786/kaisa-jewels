@extends('layouts.admin')
@section('title','Book List')
@section('content')
@can('book_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.books.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.book.title_singular') }}
            </a>
            <a class="btn btn-info" href="{{asset('/sthulaExcelUploadFileFormat.xlsx')}}">Excel Upload Format</a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                Excel Import
            </button>
            @include('csvImport.book', ['model' => 'Book', 'route' => 'admin.books.parseCsvImport'])
             @include('csvImport.imageUpload')
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.book.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Book">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.book.fields.id') }}
                    </th>
                    
                    <th>
                        {{ trans('cruds.book.fields.isbn_30') }}
                    </th>
                    <th>
                        {{ trans('cruds.book.fields.book_authors') }}
                    </th>
                    <th>
                        {{ trans('cruds.book.fields.name') }}
                    </th>
                    <th>
                        {{ trans('cruds.book.fields.price') }}
                    </th>
                    <th>
                        {{ trans('cruds.book.fields.sku') }}
                    </th>
                    <th>
                        {{ trans('cruds.book.fields.status') }}
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
@can('book_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.books.massDestroy') }}",
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
    ajax: "{{ route('admin.books.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'isbn_30', name: 'isbn_30' },
{ data: 'author_name', name: 'book_authors.name' },
{ data: 'name', name: 'name' },
{ data: 'price', name: 'price' },
{ data: 'sku', name: 'sku' },
{ data: 'status', name: 'status' },

{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 10,
  };
  let table = $('.datatable-Book').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

//let's write custom javascrit

$(document).on("click", ".imgupload", function () {
     var myBookId = $(this).data('id');
     var isbn=$(this).data('isbn');
     $(".modal-body #bookId").val(myBookId);
     $(".modal-body #span_book_id").text(myBookId);
     $(".modal-body #span_isbn").text(isbn);
});
</script>
@endsection
