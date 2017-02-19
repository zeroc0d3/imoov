@extends('laravel-authentication-acl::client.layouts.base-fullscreen')
@section ('title')
403
@stop

@section ('head_css')
{!! Theme::set('djavaui') !!}
{!! Theme::css('zeroc0d3/css/zeroc0d3.error-page.css') !!}
@stop

@section('container')
<!-- START @ERROR PAGE -->
<div class="error-wrapper">
    <h1>403!</h1>
    <h3>Forbidden: Access is denied.</h3>
    <h4>You do not have permission to view this directory or page using the creditials that you supplied.</h4>
</div>
<!--/ END @ERROR PAGE -->
@stop
