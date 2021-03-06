@extends('laravel-authentication-acl::client.layouts.base-fullscreen')

@section ('title')
Change Password
@stop

@section ('head_css')
{!! Theme::set('djavaui') !!}
{!! Theme::css('zeroc0d3/css/zeroc0d3.page.css') !!}
@stop

@section('container')

<!-- Brand -->
<div id="sign-wrapper" class="center-msg">
    <div class="brand">
        <!-- SET THEME SECTION -->
        {!! Theme::set('djavaui') !!}
        {!! Theme::img('img/logo-icon.png', 'zeroc0d3', 'img-icon') !!}
        {{-- <div class="header-brand">CHANGE PASSWORD</div> --}}
    </div>
    <!--/ Brand -->

    <div class="row">
        <div class="col-md-12">
            <div class="grid-stack-animate" data-gs-width="12" data-gs-animate="yes">
                <div class="grid-stack-item ui-draggable ui-resizable ui-resizable-autohide" data-gs-x="0" data-gs-y="9" data-gs-width="12" data-gs-height="3">
                    <div class="panel panel-teal shadow grid-stack-item-content ui-draggable-handle">
                        <div class="panel-heading">
                            <h3 class="panel-title">Password Changed Successfully</h3>
                        </div><!-- /.panel-heading -->
                        <div class="panel-body bg-white">
                            Your password has been changed succesfully. Now you can login to our site. <br><i class="fa fa-home"></i> <a href="{{ URL::route('user.admin.login') }}">Go to Sign in</a>
                        </div><!-- /.panel-body -->
                    </div><!-- /.panel -->
                <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90; display: none;"></div></div>
            </div>
        </div>
    </div>
</div>

@stop
