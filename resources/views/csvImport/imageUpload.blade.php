<div class="modal fade" id="imageUpload" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Image Upload</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class='row'>
                    <div class='col-md-12'>
                        <form class="form-horizontal" method="POST" action="{{URL::to('/admin/books/imageupload')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('excel_file') ? ' has-error' : '' }}">

                                <h6>Book id- <span id="span_book_id"></span></h6>
                                <h6>ISBN13 Number - <span id="span_isbn"></span></h6>
                                

                                <label for="image" class="col-md-4 control-label">Image file to upload</label>

                                <div class="col-md-6">

                                    <input type="hidden" name="bookId" value="" id="bookId">
                                    <input id="image" type="file" class="form-control-file" name="image" required>

                                    @if($errors->has('image'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                      Upload Image
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
