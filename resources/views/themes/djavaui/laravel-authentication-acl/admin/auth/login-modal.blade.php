{{-- ERROR MODAL --}}
<div class="bs-modal-danger">
    <div class="modal modal-danger">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Danger</h4>
                </div>
                <div class="modal-body">
                    @if( isset($message) )
                        <div>{{$message}}</div>
                    @endif
                    @if($errors && ! $errors->isEmpty() )
                    <div>
                        @foreach($errors->all() as $error)
                          <div>{{$error}}</div>
                        @endforeach
                    </div>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="cancel" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Save changes</button>
                </div>
            </div>
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>

{{-- SUCCESS MODAL --}}
<div class="bs-modal-success">
    <div class="modal modal-success">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Danger</h4>
                </div>
                <div class="modal-body">
                    @yield('modal_messages')
                </div>
                <div class="modal-footer">
                    <button type="cancel" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">OK</button>
                </div>
            </div>
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
