<div class="card-block">

    @if( ! $groups->isEmpty() )
    <div class="panel panel-default shadow">
        <div class="panel-heading">
            <div class="pull-left">
                <h3 class="panel-title">&nbsp;</h3>
            </div>
            <div class="pull-right">
                <a href="{!! URL::route('groups.edit') !!}" class="btn btn-success px-2">Add Groups <i class="fa fa-plus"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            <!-- <table id="datatable" class="table table-default table-bordered"> -->
            <table class="table table-default table-bordered">
                  <thead>
                <tr>
                    <th>Group name</th>
                    <th class="text-center" style="width: 150px;">Actions</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($groups as $group)
                  <tr>
                      <td>{!! $group->name !!}</td>
                      <td class="text-center">
                      @if(! $group->protected)
                          <a href="{!! URL::route('groups.edit', ['id' => $group->id]) !!}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" data-title="Edit"><i class="fa fa-pencil"></i></a>
                          <a href="{!! URL::route('groups.delete',['id' => $group->id, '_token' => csrf_token()]) !!}" class="btn btn-danger delete" data-toggle="tooltip" data-placement="top" data-title="Delete" style="margin-right: 0;"><i class="fa fa-trash"></i></a>
                      @else
                          <i class="fa fa-pencil"></i>
                          <i class="fa fa-trash"></i>
                      @endif
                      </td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Group name</th>
                    <th class="text-center" style="width: 150px;">Actions</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    {{-- @include('laravel-authentication-acl::admin.group.group-pagination') --}}
    @else
    <span class="text-warning"><h5>No results found.</h5></span>
    @endif
    <div class="paginator">
        {!! $groups->appends($request->except(['page']) )->render() !!}
    </div>
</div>
