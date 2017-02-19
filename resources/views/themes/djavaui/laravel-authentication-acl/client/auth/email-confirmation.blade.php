@extends('laravel-authentication-acl::client.layouts.base-fullscreen')

@section ('title')
Registration Confirmation
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
        {{-- <div class="header-brand">REGISTRATION CONFIRMATION</div> --}}
    </div>
    <!--/ Brand -->

    <div class="row">
        <div class="col-md-12">
            <div class="grid-stack-animate" data-gs-width="12" data-gs-animate="yes">
                <div class="grid-stack-item ui-draggable ui-resizable ui-resizable-autohide" data-gs-x="0" data-gs-y="9" data-gs-width="12" data-gs-height="3">
                    <div class="panel panel-teal shadow grid-stack-item-content ui-draggable-handle">
                        <div class="panel-heading">
                            <h3 class="panel-title">Registration Confirmation</h3>
                        </div><!-- /.panel-heading -->
                        <div class="panel-body bg-white">
                            @if($errors->has('token'))
                                <h1><i class="fa fa-bolt"></i> Oops, something went wrong: the token is invalid</h1>
                            @elseif($errors->has('email'))
                                <h1><i class="fa fa-bolt"></i> Oops, something went wrong: the email is invalid</h1>
                            @else
                                <h1><i class="fa fa-thumbs-up"></i> Congratulations, you successfully registered to
                                    {!! Config::get('acl_base.app_name') !!}</h1>
                                <p class="lead">Your email has been confirmed.
                                    Now you can login to the website using the {!! link_to('/admin','Following link') !!}</p>
                            @endif
                        </div><!-- /.panel-body -->
                    </div><!-- /.panel -->
                <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90; display: none;"></div></div>
            </div>
        </div>
    </div>
</div>

@stop
