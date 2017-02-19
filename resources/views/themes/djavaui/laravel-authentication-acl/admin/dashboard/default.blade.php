@extends('laravel-authentication-acl::admin.layouts.base')

@section('title')
Dashboard
@stop

@section('container')

<!-- START @PAGE CONTENT -->
<section id="page-content">

  <!-- Start page header -->
  <div id="tour-11" class="header-content">
      <h2><i class="fa fa-home"></i>Dashboard <span>dashboard & statistics</span></h2>
      <div class="breadcrumb-wrapper hidden-xs">
          <span class="label">You are here:</span>
          <ol class="breadcrumb">
              <li class="active">Dashboard</li>
          </ol>
      </div>
  </div><!-- /.header-content -->
  <!--/ End page header -->

  <!-- Start body content -->
  <div class="body-content animated fadeIn">

    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="mini-stat-type-6 bg-success shadow">
                <div class="inner">
                    <h3>
                        Active
                    </h3>
                    <p>
                        {!! $active !!} Users
                    </p>
                </div>
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                <a href="#" class="small-box-footer">
                    Details <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="mini-stat-type-6 bg-info shadow">
                <div class="inner">
                    <h3>
                        Registered
                    </h3>
                    <p>
                        {!! $registered !!} Users
                    </p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href="#" class="small-box-footer">
                    Details <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="mini-stat-type-6 bg-warning shadow">
                <div class="inner">
                    <h3>
                        Pending
                    </h3>
                    <p>
                        {!! $pending !!} Users
                    </p>
                </div>
                <div class="icon">
                    <i class="fa fa-hourglass-half"></i>
                </div>
                <a href="#" class="small-box-footer">
                    Details <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="mini-stat-type-6 bg-danger shadow">
                <div class="inner">
                    <h3>
                        Banned
                    </h3>
                    <p>
                        {!! $banned !!} Users
                    </p>
                </div>
                <div class="icon">
                    <i class="fa fa-times-circle"></i>
                </div>
                <a href="#" class="small-box-footer">
                    Details <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
  </div>

  </div><!-- /.body-content -->
  <!--/ End body content -->

  <!-- Start footer content -->
  {{-- Footer Section --}}
  <!--/ End footer content -->

</section><!-- /#page-content -->
<!--/ END PAGE CONTENT -->

@stop
