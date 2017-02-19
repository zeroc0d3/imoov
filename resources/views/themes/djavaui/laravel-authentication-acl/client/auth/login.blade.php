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
        {{-- <div class="header-brand">W E L C O M E</div> --}}
    </div>
    <!--/ Brand -->

    <!-- Login form -->
    {!! Form::open(array('url' => URL::route("user.login"), 'method' => 'post', 'class'=>'sign-in form-horizontal shadow rounded no-overflow') ) !!}
        <div class="sign-header">
            <div class="form-group">
                <div class="sign-text">
                    <span>Login iMoov</span>
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

        <!-- Login form -->
        <div class="sign-body">
            <div class="form-group">
                <div class="input-group input-group-lg rounded no-overflow">
                    {!! Form::email('email', '', ['id' => 'email', 'class' => 'form-control input-sm', 'placeholder' => 'Email address', '', 'autocomplete' => 'off']) !!}
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                </div>
            </div><!-- /.form-group -->
            <div class="form-group">
                <div class="input-group input-group-lg rounded no-overflow">
                    {!! Form::password('password', ['id' => 'password', 'class' => 'form-control input-sm', 'placeholder' => 'Password', '', 'autocomplete' => 'off']) !!}
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                </div>
            </div><!-- /.form-group -->
        </div><!-- /.sign-body -->
        <div class="sign-footer">
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="ckbox ckbox-theme">
                            <input id="remember" type="checkbox" value="true">
                            <label for="remember" class="rounded">Remember me</label>
                        </div>
                    </div>
                    <div class="col-xs-6 text-right">
                        <a href="{!! URL::route('user.recovery-password') !!}" title="lost password">Lost password?</a>
                    </div>
                </div>
            </div><!-- /.form-group -->
            <div class="form-group">
                <button type="submit" class="btn btn-theme btn-lg btn-block no-margin rounded" id="login-btn">Sign In</button>
            </div><!-- /.form-group -->
            <div class="form-group">
               <div class="center-text">
                 <a href="{{ asset('callback/facebook') }}" class="btn btn-facebook btn-block no-margin rounded btn-socmed"><i class="fa fa-facebook link-socmed"></i>Login with Facebook</a>
               </div>
            </div><!-- /.form-group -->
        </div><!-- /.sign-footer -->
    <!--/ Login form -->
    {!! Form::close() !!}
    <!-- Content text -->
    <div class="text-muted text-center sign-link">Need an account? <a href="{{ URL::route('user.signup') }}"> Sign up here</a></div>
    <!--/ Content text -->

</div><!-- /#sign-wrapper -->
<!--/ END SIGN WRAPPER -->
@stop

@section('footer_scripts')
{!! Theme::js('zeroc0d3/js/zeroc0d3.login.js') !!}
@stop
