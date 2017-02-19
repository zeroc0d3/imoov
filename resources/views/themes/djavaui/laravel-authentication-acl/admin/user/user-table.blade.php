<div class="panel panel-info">
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-10 col-md-9 col-sm-9 btn-order">
                {!! Form::open(['method' => 'get', 'class' => 'form-inline']) !!}
                    <div class="form-group">
                        {!! Form::select('order_by', ["" => "select column", "first_name" => "First name", "last_name" => "Last name", "email" => "Email", "last_login" => "Last login", "active" => "Active"], $request->get('order_by',''), ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::select('ordering', ["asc" => "Ascending", "desc" => "descending"], $request->get('ordering','asc'), ['class' =>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Order', ['class' => 'btn btn-default']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3 btn-new">
                <a href="{!! URL::route('users.edit') !!}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New</a>
            </div>
        </div>
      <div class="row">
          <div>
              @if(! $users->isEmpty() )
              <!-- Start datatable -->
              <table id="datatable-dom" class="table table-striped table-lilac">
                  <thead>
                      <tr>
                        <th data-hide="phone,tablet" class="text-center">Email</th>
                        <th data-hide="phone,tablet" class="text-center">First Name</th>
                        <th data-hide="phone,tablet" class="text-center">Last Name</th>
                        <th data-hide="phone,tablet" class="text-center">Active</th>
                        <th data-hide="phone,tablet" class="text-center">Last Login</th>
                        <th data-hide="phone,tablet" class="text-center">Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($users as $user)
                      <tr>
                          <td>{!! $user->email !!}</td>
                          <td class="hidden-xs">{!! $user->first_name !!}</td>
                          <td class="hidden-xs">{!! $user->last_name !!}</td>
                          <td class="text-center">{!! $user->activated ? '<i class="fa fa-circle green"></i>' : '<i class="fa fa-circle-o red"></i>' !!}</td>
                          <td class="hidden-xs text-center">{!! $user->last_login ? $user->last_login : 'not logged yet.' !!}</td>
                          <td>
                              @if(! $user->protected)
                                  <a href="{!! URL::route('users.edit', ['id' => $user->id]) !!}"><i class="fa fa-pencil-square-o fa-2x"></i></a>
                                  <a href="{!! URL::route('users.delete',['id' => $user->id, '_token' => csrf_token()]) !!}" class="margin-left-5 delete"><i class="fa fa-trash-o fa-2x"></i></a>
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
                        <th data-hide="phone,tablet" class="text-center">Email</th>
                        <th data-hide="phone,tablet" class="text-center">First Name</th>
                        <th data-hide="phone,tablet" class="text-center">Last Name</th>
                        <th data-hide="phone,tablet" class="text-center">Active</th>
                        <th data-hide="phone,tablet" class="text-center">Last Login</th>
                        <th data-hide="phone,tablet" class="text-center">Actions</th>
                      </tr>
                  </tfoot>
              </table>
              <!--/ End datatable -->

              <div class="paginator">
                  {!! $users->appends($request->except(['page']) )->render() !!}
              </div>
              @else
                  <span class="text-warning"><h5>No results found.</h5></span>
              @endif
          </div>
      </div>
    </div>
</div>
