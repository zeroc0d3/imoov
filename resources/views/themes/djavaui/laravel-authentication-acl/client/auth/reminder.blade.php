@extends('laravel-authentication-acl::client.layouts.baseauth')

@section('title')
User Login
@stop

@section('container')
<!-- START @SIGN WRAPPER -->
<div id="sign-wrapper">

    <!-- Brand -->
    <div class="brand">
        <!-- SET THEME SECTION -->
        {!! Theme::set('djavaui') !!}
        {!! Theme::img('img/logo-icon.png', 'zeroc0d3', 'img-icon') !!}
        {{-- <div class="header-brand">R E M I N D E R</div> --}}
    </div>
    <!--/ Brand -->

    <!-- Login form -->
    {!! Form::open(array('url' => URL::route("user.reminder"), 'method' => 'post', 'class'=>'sign-in form-horizontal shadow rounded no-overflow') ) !!}
        <div class="sign-header">
            <div class="form-group">
                <div class="sign-text">
                    <span>Password Recovery</span>
                </div>
            </div><!-- /.form-group -->
        </div><!-- /.sign-header -->

        <div class="clearfix"></div>
        @if( isset($message) )
        <div class="alert alert-success">
            <span class="alert-icon"><i class="fa fa-bell-o"></i></span>
            <div class="notification-info">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <ul class="clearfix notification-meta">
                    <div>{{$message}}</div>
                </ul>
            </div>
        </div>
        @endif
        @if($errors && ! $errors->isEmpty() )
        <div class="alert alert-danger">
            <span class="alert-icon"><i class="fa fa-bell-o"></i></span>
            <div class="notification-info">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <ul class="clearfix notification-meta">
                    @foreach($errors->all() as $error)
                      <div>{{$error}}</div>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif

        <!-- Password Recovery Form -->
        <div class="sign-body">
            <div class="clearfix-top"></div>
            <div class="form-group">
                <div class="input-group input-group-lg rounded no-overflow">
                    {!! Form::email('email', '', ['id' => 'email', 'class' => 'form-control input-sm', 'placeholder' => 'Email address', '', 'autocomplete' => 'off']) !!}
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                </div>
            </div><!-- /.form-group -->
        </div><!-- /.sign-body -->
        <div class="sign-footer">
            <div class="form-group">
                <button type="submit" class="btn btn-theme btn-lg btn-block no-margin rounded" id="recover-btn">Recover</button>
            </div><!-- /.form-group -->
        </div><!-- /.sign-footer -->
    <!--/ Login form -->
    {!! Form::close() !!}
    <!-- Content text -->
    <div class="text-muted text-center sign-link"><i class="fa fa-home"></i> <a href="{{ URL::route('user.admin.login') }}">Back to Sign in</a></div>
    <!--/ Content text -->

</div><!-- /#sign-wrapper -->
<!--/ END SIGN WRAPPER -->
@stop

@section('footer_scripts')
{!! Theme::js('zeroc0d3/js/zeroc0d3.login.js') !!}
@stop
