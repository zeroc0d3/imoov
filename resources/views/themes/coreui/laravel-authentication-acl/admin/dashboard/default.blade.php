@extends('laravel-authentication-acl::admin.layouts.base-2cols')

@section('title')
Admin area: dashboard
@stop

@section('container')

<!-- Main content -->
<main class="main">
    @include('laravel-authentication-acl::admin.layouts.breadcrumb')

    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-inverse card-info">
                        <div class="card-block">
                            <div class="h1 text-muted text-right mb-2">
                                <i class="icon-people"></i>
                            </div>
                            <div class="h4 mb-0">{!! $registered !!}</div>
                            <small class="text-muted text-uppercase font-weight-bold">Total Users</small>
                            <div class="progress progress-white progress-xs mt-1">
                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="{!! $registered !!}"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.col-->

                <div class="col-sm-6 col-lg-3">
                    <div class="card card-inverse card-success">
                        <div class="card-block">
                            <div class="h1 text-muted text-right mb-2">
                                <i class="icon-user"></i>
                            </div>
                            <div class="h4 mb-0">{!! $active !!}</div>
                            <small class="text-muted text-uppercase font-weight-bold">Active Users</small>
                            <div class="progress progress-white progress-xs mt-1">
                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="{!! $active !!}"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.col-->

                <div class="col-sm-6 col-lg-3">
                    <div class="card card-inverse card-warning">
                        <div class="card-block">
                            <div class="h1 text-muted text-right mb-2">
                                <i class="icon-hourglass"></i>
                            </div>
                            <div class="h4 mb-0">{!! $pending !!}</div>
                            <small class="text-muted text-uppercase font-weight-bold">Pending Users</small>
                            <div class="progress progress-white progress-xs mt-1">
                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="{!! $pending !!}"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.col-->

                <div class="col-sm-6 col-lg-3">
                    <div class="card card-inverse card-danger">
                        <div class="card-block">
                            <div class="h1 text-muted text-right mb-2">
                                <i class="icon-ban"></i>
                            </div>
                            <div class="h4 mb-0">{!! $banned !!}</div>
                            <small class="text-muted text-uppercase font-weight-bold">Banned Users</small>
                            <div class="progress progress-white progress-xs mt-1">
                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="{!! $banned !!}"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.col-->
            </div>
            <!--/.row-->

        </div>
    </div>
    <!-- /.conainer-fluid -->
</main>

@stop
