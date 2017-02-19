<div class="row">
    <div class="col-md-12 margin-bottom-12 btn-new">
        <a href="{!! URL::route('permission.edit') !!}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New</a>
    </div>
</div>

@if( ! $permissions->isEmpty() )
<!-- Start datatable -->
<table id="datatable-dom" class="table table-striped table-lilac">
    <thead>
      <tr>
          <th data-class="expand" class="text-center">Permission Description</th>
          <th data-hide="phone,tablet" class="text-center">Permission Name</th>
          <th data-hide="phone,tablet" class="text-center">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach($permissions as $permission)
        <tr>
            <td style="width:45%">{!! $permission->description !!}</td>
            <td style="width:45%">{!! $permission->permission !!}</td>
            <td style="width:10%" class="text-center">
                @if(! $permission->protected)
                <a href="{!! URL::route('permission.edit', ['id' => $permission->id]) !!}"><i class="fa fa-pencil-square-o fa-2x"></i></a>
                <a href="{!! URL::route('permission.delete',['id' => $permission->id, '_token' => csrf_token()]) !!}" class="margin-left-5"><i class="fa fa-trash-o delete fa-2x"></i></a>
                @else
                    <i class="fa fa-times fa-2x light-blue"></i>
                    <i class="fa fa-times fa-2x margin-left-12 light-blue"></i>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th data-class="expand" class="text-center">Permission Description</th>
            <th data-hide="phone,tablet" class="text-center">Permission Name</th>
            <th data-hide="phone,tablet" class="text-center">Action</th>
        </tr>
    </tfoot>
</table>
<!--/ End datatable -->
@else
<span class="text-warning"><h5>No permissions found.</h5></span>
@endif
