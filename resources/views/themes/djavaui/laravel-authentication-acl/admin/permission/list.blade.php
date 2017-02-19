@extends('laravel-authentication-acl::admin.layouts.base')

@section('title')
  Permissions List
@stop

@section('container')

<!-- START @PAGE CONTENT -->
<section id="page-content">

    <!-- Start page header -->
    <div class="header-content">
        <h2><i class="fa fa-key"></i> User Permission <span>form user permission</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="{!! URL::route('dashboard.default') !!}">Dashboard</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Permissions</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">User Permission</li>
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
                {{-- print errors --}}
                @if($errors && ! $errors->isEmpty() )
                <div class="callout callout-danger mb-20">
                    @foreach($errors->all() as $error)
                    <div class="post-info">
                        {{$error}}
                    </div>
                    @endforeach
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

                <div class="panel panel-teal rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title"><i class="fa fa-trophy"></i> Permissions List</h3>
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
                    <div class="panel-body no-padding">
                        @include('laravel-authentication-acl::admin.permission.permission-table')
                    </div>
                </div>
            </div>
      </div>
</div>
@stop

@section('footer_scripts')
    <script>
        $(".delete").click(function(){
            return confirm("Are you sure to delete this item?");
        });
    </script>
@stop
