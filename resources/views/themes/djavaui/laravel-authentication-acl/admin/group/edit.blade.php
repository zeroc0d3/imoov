@extends('laravel-authentication-acl::admin.layouts.base')

@section('title')
Create/Edit Group
@stop

@section('container')

<!-- START @PAGE CONTENT -->
<section id="page-content">

    <!-- Start page header -->
    <div class="header-content">
        <h2><i class="fa fa-users"></i> Group Users<span>form group user</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="{!! URL::route('dashboard.default') !!}">Dashboard</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Groups</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Group Users</li>
            </ol>
        </div><!-- /.breadcrumb-wrapper -->
    </div><!-- /.header-content -->
    <!--/ End page header -->

    <!-- Start body content -->
    <div class="body-content animated fadeIn">
        {{--
        <div class="row">
            <div class="col-md-12">
                <div class="callout callout-info mb-20">
                    <p>Bootstrap includes validation styles for error, warning, and success states on form controls. To use, add <code>.has-warning</code>, <code>.has-error</code>, or <code>.has-success</code> to the parent element. Any <code>.control-label</code>, <code>.form-control</code>, and <code>.help-block</code> within that element will receive the validation styles.</p>
                </div>
            </div>
        </div><!-- /.row -->
        --}}
        <div class="row">
            <div class="col-md-12">
                {{-- model general errors from the form --}}
                @if($errors->has('model') )
                <div class="callout callout-danger mb-20">
                    <div class="post-info">
                        {{$errors->first('model')}}
                    </div>
                </div>
                @endif

                {{-- successful message --}}
                <?php $message = Session::get('message'); ?>
                @if( isset($message) )
                <div class="callout callout-info mb-20">
                    <div class="post-info">
                        <p>{{$message}}</p>
                    </div>
                </div>
                @endif
                <div class="col-md-8">
                    <!-- Start Form -->
                    <div class="panel panel-teal rounded shadow">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h3 class="panel-title">{!! isset($group->id) ? '<i class="fa fa-pencil"></i> Edit' : '<i class="fa fa-users"></i> Create' !!} Group</h3>
                            </div>
                            <div class="pull-right">
                                <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                                {{--
                                <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                                --}}
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-body no-padding">
                            {!! Form::model($group, [ 'url' => [URL::route('groups.edit'), $group->id], 'method' => 'post', 'class' => 'form-horizontal form-bordered', 'role' => 'form', 'id' => 'group-validation'] ) !!}
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Group Name <span class="asterisk">*</span></label>
                                        <div class="col-sm-7">
                                            {!! Form::text('name', null, ['class' => 'form-control input-sm', 'placeholder' => 'Group Name']) !!}
                                        </div>
                                    </div><!-- /.form-group -->
                                </div><!-- /.form-body -->
                                <div class="form-footer">
                                    <div class="col-sm-offset-3">
                                        {!! Form::hidden('id') !!}
                                        <a href="{!! URL::route('permission.delete',['id' => $group->id, '_token' => csrf_token()]) !!}" class="btn btn-danger delete">Delete</a>
                                        {!! Form::submit('Save', array("class"=>"btn btn-success")) !!}
                                    </div>
                                </div><!-- /.form-footer -->
                            {!! Form::close() !!}
                        </div>
                    </div><!-- /.panel -->
                    <!--/ End Form -->
                </div>

                <div class="col-md-4">
                    @include('laravel-authentication-acl::admin.group.perm')
                </div>

            </div>
        </div><!-- /.row -->
    </div>

</section>
@stop

@section('footer_scripts')
{!! Theme::set('djavaui') !!}
{!! Theme::js('zeroc0d3/js/zeroc0d3.form.validation.js') !!}
<script>
    $(".delete").click(function(){
        return confirm("Are you sure to delete this item?");
    });
</script>
@stop
