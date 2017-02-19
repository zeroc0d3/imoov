<div class="panel panel-teal">
    <div class="panel-heading">
      <div class="pull-left">
          <h3 class="panel-title"><i class="fa fa-search"></i> Group Search</h3>
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
        {!! Form::open(['route' => 'groups.list','method' => 'get']) !!}
        <!-- name text field -->
        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'group name']) !!}
        </div>
        <span class="text-danger">{!! $errors->first('name') !!}</span>
        {!! Form::submit('Search', ["class" => "btn btn-success pull-right"]) !!}
        {!! Form::close() !!}
    </div>
</div>
