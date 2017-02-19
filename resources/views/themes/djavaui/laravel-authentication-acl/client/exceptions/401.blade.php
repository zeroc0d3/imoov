@extends('laravel-authentication-acl::client.layouts.base-fullscreen')
@section ('title')
401
@stop

@section ('head_css')
{!! Theme::set('djavaui') !!}
{!! Theme::css('zeroc0d3/css/zeroc0d3.error-page.css') !!}
@stop

@section('container')
<!-- START @ERROR PAGE -->
<div class="error-wrapper">
    <h1>401!</h1>
    <h3>The page you are looking for has not been found!</h3>
    <h4>The page you are looking for might have been removed, or unavailable. <br> <br/> Go back to <a href="{!! URL::to('/') !!}"><i class="icon-home"></i> homepage</a> or maybe you could try a search:</h4>
    <form action="#" class="form-horizontal">
        <div class="form-group has-feedback no-padding">
            <input type="text" class="form-control typeahead" placeholder="Search for page ">
            <button type="submit" class="btn btn-theme fa fa-search form-control-feedback"></button>
        </div>
    </form>
</div>
<!--/ END @ERROR PAGE -->
@stop
