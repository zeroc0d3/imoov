@extends('laravel-authentication-acl::client.layouts.base-fullscreen')
@section ('title')
503
@stop

@section ('head_css')
{!! Theme::set('djavaui') !!}
{!! Theme::css('zeroc0d3/css/zeroc0d3.error-page.css') !!}
@stop

@section('container')
<!-- START @ERROR PAGE -->
<div class="error-wrapper">
    <h1>503</h1>
    <h3>Internal Server Error.</h3>
    <h4>Houston, we have a problem!</h4>
    <p class="text-muted">The page you are looking for is temporarily unavailable.</p>
    <a href="{!! asset('/') !!}" class="btn btn-sm btn-theme">Return to Home</a>
    <a href="{!! URL::route('dashboard.default') !!}" class="btn btn-sm btn-theme">Go to Dashboard</a>
</div>
<!--/ END ERROR PAGE -->
@stop
