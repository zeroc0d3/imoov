<div class="panel panel-teal">
    <div class="panel-heading">
      <div class="pull-left">
          <h3 class="panel-title"><i class="fa fa-key"></i> Group Permission</h3>
      </div>
      <div class="pull-right">
          {{--
          <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
          --}}
          <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
          {{--
          <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
          --}}
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="panel-body">
      {!! Form::open(["route" => "groups.edit.permission","role"=>"form", 'class' => 'form-add-perm']) !!}
      <div class="form-group">
          <div class="input-group">
              <span class="input-group-addon form-button button-add-perm"><span class="glyphicon glyphicon-plus-sign add-input"></span></span>
              {!! Form::select('permissions', $permission_values, '', ["class"=>"form-control permission-select"]) !!}
          </div>
          <span class="text-danger">{!! $errors->first('permissions') !!}</span>
          {!! Form::hidden('id', $group->id) !!}
          {{-- add permission operation --}}
          {!! Form::hidden('operation', 1) !!}
          </div>
          <div class="form-group">
              @if(! $group->exists)
              <span class="text-danger"><h5>You need to create a group first.</h5></span>
              @endif
          </div>
      {!! Form::close() !!}

      @if( $presenter->permissions )
      @foreach($presenter->permissions_obj as $permission)
          {!! Form::open(["route" => "groups.edit.permission", "role"=>"form", 'name' => $permission->permission]) !!}
          <div class="form-group">
              <div class="input-group">
                  <span class="input-group-addon form-button button-del-perm" name="{!! $permission->permission !!}"><span class="glyphicon glyphicon-minus-sign add-input"></span></span>
                             {!! Form::text('permission_desc', $permission->description, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
               {!! Form::hidden('permissions', $permission->permission) !!}
                  {!! Form::hidden('id', $group->id) !!}
                  {{-- add permission operation --}}
                  {!! Form::hidden('operation', 0) !!}
              </div>
          </div>
          {!! Form::close() !!}
      @endforeach
      @elseif($group->exists)
      <span class="text-warning"><h5>There is no permission associated to the group.</h5></span>
      @endif
</div>

@section('footer_scripts')
@parent
<script>
    $(".button-add-perm").click( function(){
        <?php if($group->exists): ?>
        $('.form-add-perm').submit();
        <?php endif; ?>
    });
    $(".button-del-perm").click( function(){
        name = $(this).attr('name');
        $('form[name='+name+']').submit();
    });
</script>
@stop
