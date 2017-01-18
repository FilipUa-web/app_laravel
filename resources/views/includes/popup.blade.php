<div id="upload_popup" class="modal fade pop-up-1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myLargeModalLabel-1">Images</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    @foreach($medias as $media)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a class="popup"><img data-dismiss="modal" aria-hidden="true" id="{{$media->id}}" style="padding: 5px; margin-bottom: 15px; width:270px; height:230px"   src="{{url($media->file)}}" class="img-thumbnail" alt=""></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal mixer image -->