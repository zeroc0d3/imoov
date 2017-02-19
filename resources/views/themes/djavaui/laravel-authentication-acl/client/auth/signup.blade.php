@extends('laravel-authentication-acl::client.layouts.baseauth')

@section('title')
Register New Account
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
    {!! Form::open(["route" => 'user.signup.process', 'class'=>'sign-in form-horizontal shadow rounded no-overflow', 'id' => 'user_signup']) !!}
    {{-- Field hidden to fix chrome and safari autocomplete bug --}}
    {!! Form::password('__to_hide_password_autocomplete', ['class' => 'hidden']) !!}
        <div class="sign-header">
            <div class="form-group">
                <div class="sign-text">
                    <span>Register iMoov</span>
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

        <!-- Register form -->
        <div class="sign-body">
            <div class="clearfix-top"></div>
            <div class="form-group">
                <div class="input-group input-group-lg rounded no-overflow">
                    {!! Form::email('email', '', ['id' => 'email', 'class' => 'form-control input-sm', 'placeholder' => 'Email address', '', 'autocomplete' => 'off']) !!}
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                </div>
            </div><!-- /.form-group -->
        </div>
        <div class="sign-body">
            <div class="form-group">
              <div class="input-group input-group-lg rounded no-overflow">
                  {!! Form::text('first_name', '', ['id' => 'first_name', 'class' => 'form-control input-sm', 'placeholder' => 'First name', '', 'autocomplete' => 'off']) !!}
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
              </div>
            </div><!-- /.form-group -->
            <div class="form-group">
              <div class="input-group input-group-lg rounded no-overflow">
                  {!! Form::text('last_name', '', ['id' => 'last_name', 'class' => 'form-control input-sm', 'placeholder' => 'Last name', '', 'autocomplete' => 'off']) !!}
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
              </div>
            </div><!-- /.form-group -->
        </div>
        <div class="sign-body">
           <div class="form-group">
                <div class="input-group input-group-lg rounded no-overflow">
                    {!! Form::password('password', ['id' => 'password1', 'class' => 'form-control input-sm', 'placeholder' => 'Password', '', 'autocomplete' => 'off']) !!}
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                </div>
            </div><!-- /.form-group -->
            <div class="form-group">
                <div class="input-group input-group-lg rounded no-overflow">
                    {!! Form::password('password_confirmation', ['id' => 'password2', 'class' => 'form-control input-sm', 'placeholder' => 'Confirm password', 'required', 'autocomplete' => 'off']) !!}
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                </div>
            </div><!-- /.form-group -->
        </div>
        {{-- Captcha validation --}}
        {{--
        <div class="sign-body">
            @if(isset($captcha) )
            <div class="form-group">
                <div class="input-group input-group-lg rounded no-overflow" id="captcha-img-container">
                    @include('laravel-authentication-acl::client.auth.captcha-image')
                    <span class="input-group-addon" id="captcha-span">
                        <a href="#" id="captcha-gen-button"><i class="fa fa-refresh"></i></a>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group input-group-lg rounded no-overflow">
                    {!! Form::text('captcha_text',null, ['class'=> 'form-control input-sm', 'placeholder' => 'Fill in with the text of the image', '', 'autocomplete' => 'off']) !!}
                    <span class="input-group-addon"><i class="fa fa-image"></i></span>
                </div>
            </div>
            @endif
        </div><!-- /.sign-body -->
        --}}

        <div class="sign-footer">
            <div class="form-group">
                <div id="pass-info" class="text-danger"></div>
            </div><!-- /.form-group -->
            <div class="form-group">
                <div class="callout callout-info no-margin">
                    <p class="text-muted">To confirm and activate your new account, we will need to send the activation code to your e-mail.</p>
                </div>
            </div>
            <div class="form-group">
                <div class="no-margin">
                    <p class="text-muted">By clicking Sign Up, you agree to our <a href="#">Term Of Service</a> and that you have read our Data Use Policy, including our Cookie Use.</p>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-theme btn-lg btn-block no-margin rounded" id="register-btn">Sign Up</button>
            </div><!-- /.form-group -->
            <div class="form-group">
               <div class="center-text">
                 <a href="{{ asset('callback/facebook') }}" class="btn btn-facebook btn-block no-margin rounded btn-socmed"><i class="fa fa-facebook link-socmed"></i>Register with Facebook</a>
               </div>
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
    {{-- Js files --}}
    {!! Theme::js('zeroc0d3/js/zeroc0d3.register.js') !!}
    {!! Theme::js('zeroc0d3/js/zeroc0d3.password-strength.js') !!}

    <script>
      $(document).ready(function() {
        //------------------------------------
        // password checking
        //------------------------------------
        var password1 		= $('#password1'); //id of first password field
        var password2		  = $('#password2'); //id of second password field
        var passwordsInfo = $('#pass-info'); //id of indicator element

        passwordStrengthCheck(password1,password2,passwordsInfo);

        //------------------------------------
        // captcha regeneration
        //------------------------------------

        $("#captcha-gen-button").click(function(e){
            e.preventDefault();
            $.ajax({
                url: "/captcha-ajax",
                method: "POST",
                headers: { 'X-CSRF-Token' : '{!! csrf_token() !!}' }
              }).done(function(image) {
                $("#captcha-img-container").html(image);
                $("#captcha-span").show();
              });
          });

          $("#captcha-gen-img").click(function(e){
              e.preventDefault();
              $.ajax({
                  url: "/captcha-ajax",
                  method: "POST",
                  headers: { 'X-CSRF-Token' : '{!! csrf_token() !!}' }
                }).done(function(image) {
                  $("#captcha-img-container").html(image);
                  $("#captcha-span").show();
                });
          });
      });
      </script>
@stop
