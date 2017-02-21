@extends('laravel-authentication-acl::admin.layouts.baseauth')
@section('title')
Admin Login
@stop
@section('container')
<!--[if lt IE 9]>
<p class="upgrade-browser">Upps!! You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card-group mb-0">
            <div class="card p-2">
                <?php $message = Session::get('message'); ?>
                @if( isset($message) )
                <div class="card-block card-success flash">{{$message}}</div>
                @endif
                @if($errors && ! $errors->isEmpty() )
                <div class="card-block card-danger flash">
                    @foreach($errors->all() as $error)
                      <div>{{$error}}</div>
                    @endforeach
                </div>
                @endif

                <div class="card-block">
                   {!! Form::open(array('url' => URL::route("user.login.process"), 'method' => 'post') ) !!}
                    <h1>Login</h1>
                    <p class="text-muted">Login to {!!Config::get('acl_base.app_name')!!}</p>
                    <div class="input-group mb-1">
                        <span class="input-group-addon"><i class="icon-envelope"></i>
                        </span>
                        {!! Form::email('email', '', ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'Email address', 'required', 'autocomplete' => 'off']) !!}
                    </div>
                    <div class="input-group mb-1">
                        <span class="input-group-addon"><i class="icon-lock"></i>
                        </span>
                        {!! Form::password('password', ['id' => 'password', 'class' => 'form-control', 'placeholder' => 'Password', 'required', 'autocomplete' => 'off']) !!}
                    </div>
                    <div class="input-group mb-1">
                        <div class="col-md-6 col-sm-6">
                            {!! Form::checkbox('remember') !!}
                            {!! Form::label('remember','Remember me') !!}
                        </div>
                        <div class="col-md-6 col-sm-6 text-right">
                            {!! link_to_route('user.recovery-password','Forgot password?') !!}
                        </div>
                    </div>
                    <div class="clearfix">
                      <button type="submit" class="btn btn-primary col-md-12 clearfix">Login</button>
                    </div>
                    <a href="http://mylaravel.app/callback/facebook" class="btn btn-block btn-facebook"> Facebook</a>

                    {!! Form::close() !!}
                </div>
            </div>
            <div class="card card-inverse card-info py-3 hidden-md-down" style="width:44%">
                <div class="card-block text-center">
                    <div>
                        <h2>Sign Up</h2>
                        <p>Register for New Account</p>
                        {!! Theme::img('img/logo.png', 'logo', 'img-logo') !!}
                    </div>
                    <br>
                    <a href="{{ URL::route('user.signup') }}" class="btn btn-primary active mt-1">Register Now!</a>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
