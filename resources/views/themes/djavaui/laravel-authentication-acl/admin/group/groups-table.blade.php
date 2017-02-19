<div class="row">
    <div class="col-md-12 margin-bottom-12 btn-new">
        <a href="{!! URL::route('groups.edit') !!}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New</a>
    </div>
</div>

@if( ! $groups->isEmpty() )
<!-- Start datatable -->
<table id="datatable-dom" class="table table-striped table-lilac">
    <thead>
        <tr>
          <th data-hide="phone,tablet" class="text-center">Group Name</th>
          <th data-hide="phone,tablet" class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($groups as $group)
        <tr>
            <td style="width:90%">{!! $group->name !!}</td>
            <td style="width:10%">
            @if(! $group->protected)
                <a href="{!! URL::route('groups.edit', ['id' => $group->id]) !!}"><i class="fa fa-edit fa-2x"></i></a>
                <a href="{!! URL::route('groups.delete',['id' => $group->id, '_token' => csrf_token()]) !!}" class="margin-left-5 delete"><i class="fa fa-trash-o fa-2x"></i></a>
                <span class="clearfix"></span>
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
          <th data-hide="phone,tablet" class="text-center">Group Name</th>
          <th data-hide="phone,tablet" class="text-center">Action</th>
        </tr>
    </tfoot>
</table>
<!--/ End datatable -->
@else
<span class="text-warning"><h5>No results found.</h5></span>
@endif
<div class="paginator">
    {!! $groups->appends($request->except(['page']) )->render() !!}
</div>
