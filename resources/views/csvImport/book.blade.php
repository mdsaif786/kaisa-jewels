<div class="modal fade" id="csvImportModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Excel Import</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class='row'>
                    <div class='col-md-12'>
                        <form class="form-horizontal" method="POST" action="{{URL::to('/admin/books/excelsupload')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('excel_file') ? ' has-error' : '' }}">
                                <label for="excel_file" class="col-md-4 control-label">Excel file to import</label>

                                <div class="col-md-6">
                                    <input id="excel_file" type="file" class="form-control-file" name="excel_file" required>

                                    @if($errors->has('excel_file'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('excel_file') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                       Excel Import
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
