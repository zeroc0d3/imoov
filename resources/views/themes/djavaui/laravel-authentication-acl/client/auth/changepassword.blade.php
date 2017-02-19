@extends('laravel-authentication-acl::client.layouts.base')
@section('title')
Change password
@stop
@section('content')
<div class="row centered-form">
    <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Change your password to {!! Config::get('acl_base.app_name') !!}</h3>
            </div>
            @if($errors && ! $errors->isEmpty() )
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">{!! $error !!}</div>
            @endforeach
            @endif
            <div class="panel-body">
                {!! Form::open(array('url' => URL::route("user.reminder.process"), 'method' => 'post') ) !!}
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            {!! Form::label('password', 'New password: ') !!}
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                {!! Form::password('password', ['id' => 'password', 'class' => 'form-control', 'placeholder' => 'New password', 'required', 'autocomplete' => 'off']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Change password" class="btn btn-info btn-block">
                {!! Form::hidden('email',$email) !!}
                {!! Form::hidden('token',$token) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop


@extends('laravel-authentication-acl::client.layouts.baseauth')

@section('title')
User Login
@stop

@section('container')
<div id="sign-wrapper">

    <!-- Brand -->
    <div class="brand">
        <!-- SET THEME SECTION -->
        {!! Theme::set('djavaui') !!}
        {!! Theme::img('img/logo-icon.png', 'zeroc0d3', 'img-icon') !!}
        {{-- <div class="header-brand">Change Password</div> --}}
    </div>
    <!--/ Brand -->

    <!-- Login form -->
    {!! Form::open(array('url' => URL::route("user.reminder.process"), 'method' => 'post', 'class'=>'sign-in form-horizontal shadow rounded no-overflow') ) !!}
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
                    {!! Form::email('email', '', ['id' => 'email', 'class' => 'form-control input-sm', 'placeholder' => 'Email address', 'readonly', 'autocomplete' => 'off']) !!}
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-lg rounded no-overflow">
                        {!! Form::password('password', ['id' => 'password', 'class' => 'form-control input-sm', 'placeholder' => 'Password', 'required', 'autocomplete' => 'off']) !!}
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    </div>
                </div><!-- /.form-group -->
            </div><!-- /.form-group -->
        </div><!-- /.sign-body -->
        <div class="sign-footer">
            <div class="form-group">
                <button type="submit" class="btn btn-theme btn-lg btn-block no-margin rounded" id="change-btn">Change </button>
            </div><!-- /.form-group -->
        </div><!-- /.sign-footer -->
    <!--/ Login form -->
    {!! Form::hidden('email',$email) !!}
    {!! Form::hidden('token',$token) !!}
    {!! Form::close() !!}
    <!-- Content text -->
    <div class="text-muted text-center sign-link"><i class="fa fa-home"></i> <a href="{{ URL::route('user.admin.login') }}">Back to Sign in</a></div>
    <!--/ Content text -->

</div><!-- /#sign-wrapper -->
<!--/ END SIGN WRAPPER -->
@stop

@section('footer_scripts')
{!! Theme::js('zeroc0d3/js/zeroc0d3.chgpassword.js') !!}
@stop
