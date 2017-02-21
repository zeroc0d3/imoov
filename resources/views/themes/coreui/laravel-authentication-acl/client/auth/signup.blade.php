@extends('laravel-authentication-acl::client.layouts.base')
@section('title')
Register
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

                {!! Form::open(["route" => 'user.signup.process', "method" => "POST", "id" => "user_signup"]) !!}
                {{-- Field hidden to fix chrome and safari autocomplete bug --}}
                {!! Form::password('__to_hide_password_autocomplete', ['class' => 'hidden']) !!}
                <div class="card-block">
                    <h1>Register</h1>
                    <p class="text-muted">Create your new account</p>
                    <div class="input-group mb-1">
                        <span class="input-group-addon"><i class="icon-user"></i>
                        </span>
                        {!! Form::text('first_name', '', ['id' => 'first_name', 'class' => 'form-control', 'placeholder' => 'First name', 'required', 'autocomplete' => 'off']) !!}
                    </div>
                    <div class="input-group mb-1">
                        <span class="input-group-addon"><i class="icon-user"></i>
                        </span>
                        {!! Form::text('last_name', '', ['id' => 'last_name', 'class' => 'form-control', 'placeholder' => 'Last name', 'required', 'autocomplete' => 'off']) !!}
                    </div>

                    <div class="input-group mb-1">
                        <span class="input-group-addon"><i class="icon-envelope"></i>
                        </span>
                        {!! Form::email('email', '', ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'Email address', 'required', 'autocomplete' => 'off']) !!}
                    </div>

                    <div class="input-group mb-1">
                        <span class="input-group-addon"><i class="icon-lock"></i>
                        </span>
                        {!! Form::password('password', ['id' => 'password1', 'class' => 'form-control', 'placeholder' => 'Password', 'required', 'autocomplete' => 'off']) !!}
                    </div>

                    <div class="input-group mb-1">
                        <span class="input-group-addon"><i class="icon-lock"></i>
                        </span>
                        {!! Form::password('password_confirmation', ['class' => 'form-control', 'id' =>'password2', 'placeholder' => 'Confirm password', 'required']) !!}
                    </div>

                    <div class="input-group mb-1">
                        <div id="pass-info" class="text-danger"></div>
                    </div>

                    {{-- Captcha validation --}}
                    @if(isset($captcha) )
                    <div class="input-group mb-1">
                        <span class="form-control" id="captcha-img-container">
                            @include('laravel-authentication-acl::client.auth.captcha-image')
                        </span>
                        <a id="captcha-gen-button" href="#" class="input-group-addon"><i class="icon-refresh"></i></a>
                    </div>
                    <div class="input-group mb-1">
                        <span class="input-group-addon"><i class="icon-picture"></i>
                        </span>
                        {!! Form::text('captcha_text',null, ['class'=> 'form-control', 'placeholder' => 'Fill in with the text of the image', 'required', 'autocomplete' => 'off']) !!}
                    </div>
                    @endif

                    <button type="submit" class="btn btn-block btn-success">Create Account</button>
                    <a href="http://mylaravel.app/callback/facebook" class="btn btn-block btn-facebook">Register with Facebook</a>
                </div>
                {!! Form::close() !!}
            </div>
            <div class="card-footer p-1">
                <a href="{!! URL::route('user.admin.login') !!}"><i class="icon-login"></i> Already have account? Login here</a>
            </div>
        </div>
    </div>
</div>

    @section('footer_scripts')
        {{-- Js files --}}
        {!! Theme::set('coreui') !!}
        {!! Theme::js('js/vendor/password_strength/strength.js') !!}

        <script>
          $(document).ready(function() {
            //------------------------------------
            // password checking
            //------------------------------------
            var password1 		= $('#password1'); //id of first password field
            var password2		= $('#password2'); //id of second password field
            var passwordsInfo 	= $('#pass-info'); //id of indicator element

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
                  });
              });
          });
          </script>
    @stop

@stop
