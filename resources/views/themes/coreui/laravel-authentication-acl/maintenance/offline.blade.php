@extends('laravel-authentication-acl::client.layouts.base-fullscreen')
@section ('title')
Maintenance
@stop
@section('container')
<div class="row justify-content-center">
    <div class="col-sm-6 col-md-6 col-lg-6">
        <div class="card card-accent-danger">
            <div class="card-header">
                <img src="{!! asset('packages/coreui/img/logo.png') !!}" width="60%">
            </div>
            <div class="card-block">
                <h1 class="float-left display-4 mr-2"><i class="icon-settings"></i></h1>
                <h4 class="pt-1">Maintenance on progress</h4>
                <p class="text-muted">Sorry for inconvenience, we will back soon.</p>
            </div>
        </div>
    </div>
</div>
@stop
