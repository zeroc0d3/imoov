<div class="card-block">

    @if( ! $permissions->isEmpty() )
    <div class="panel panel-default shadow">
        <div class="panel-heading">
            <div class="pull-left">
                <h3 class="panel-title">&nbsp;</h3>
            </div>
            <div class="pull-right">
                <a href="{!! URL::route('permission.edit') !!}" class="btn btn-success px-2">Add Permission <i class="fa fa-plus"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            <!-- <table id="datatable" class="table table-default table-bordered"> -->
            <table class="table table-default table-bordered">
                  <thead>
                <tr>
                    <th>Permission Description</th>
                    <th>Permission Name</th>
                    <th class="text-center" style="width: 150px;">Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($permissions as $permission)
                    <tr>
                        <td>{!! $permission->description !!}</td>
                        <td>{!! $permission->permission !!}</td>
                        <td class="text-center">
                            @if(! $permission->protected)
                            <a href="{!! URL::route('permission.edit', ['id' => $permission->id]) !!}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" data-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="{!! URL::route('permission.delete',['id' => $permission->id, '_token' => csrf_token()]) !!}" class="btn btn-danger delete" data-toggle="tooltip" data-placement="top" data-title="Delete" style="margin-right: 0;"><i class="fa fa-trash"></i></a>

                            <!--
                            <a href="{!! URL::route('permission.delete',['id' => $permission->id, '_token' => csrf_token()]) !!}" class="btn btn-danger delete" style="margin-right: 0;" data-toggle="modal" data-placement="top" data-target="#dangerModal" data-title="Delete"><i class="fa fa-trash"></i></a>
                            -->
                            @else
                                <i class="fa fa-pencil"></i></a>
                                <i class="fa fa-trash"></i>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Permission Description</th>
                    <th>Permission Name</th>
                    <th class="text-center" style="width: 150px;">Actions</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    {{-- @include('laravel-authentication-acl::admin.permission.permission-pagination') --}}
    @else
    <span class="text-warning"><h5>No permissions found.</h5></span>
    @endif
</div>
