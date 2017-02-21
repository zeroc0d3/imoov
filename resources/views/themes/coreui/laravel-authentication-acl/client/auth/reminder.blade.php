@extends('laravel-authentication-acl::client.layouts.base')
@section('title')
Password Recovery
@stop
@section('container')

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card mx-2">
            <div class="card-block p-1">
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
                   {!! Form::open(array('url' => URL::route("user.reminder"), 'method' => 'post') ) !!}
                    <h1>Password Recovery</h1>
                    <p class="text-muted">Enter your email address</p>
                    <div class="input-group mb-2">
                        <span class="input-group-addon"><i class="icon-envelope"></i>
                        </span>
                        {!! Form::email('email', '', ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'Email address', 'required', 'autocomplete' => 'off']) !!}
                    </div>
                    <button type="submit" class="btn btn-block btn-success">Recover</button>
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="card-footer p-1">
                <a href="{!! URL::route('user.admin.login') !!}"><i class="icon-login"></i> Back to login page</a>
            </div>
        </div>
    </div>
</div>

@stop
