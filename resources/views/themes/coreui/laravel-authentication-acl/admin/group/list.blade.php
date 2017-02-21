@extends('laravel-authentication-acl::admin.layouts.base')

@section('title')
    Admin area: Groups List
@stop

@section('head_css')
    {!! Theme::set('coreui') !!}
    {{-- Theme::css('../bower_components/datatables/media/css/dataTables.bootstrap4.min.css') --}}
    {{-- Theme::css('../bower_components/datatables/media/css/dataTables.foundation.min.css') --}}
    {!! Theme::css('../bower_components/datatables/media/css/dataTables.jqueryui.min.css') !!}
    {!! Theme::css('../bower_components/datatables/media/css/dataTables.uikit.min.css') !!}
    {!! Theme::css('../bower_components/datatables/media/css/jquery.dataTables.min.css') !!}
    {!! Theme::css('../bower_components/datatables/media/css/jquery.dataTables_themeroller.css') !!}
@stop

@section('container')
<!-- Main content -->
<main class="main">
    @include('laravel-authentication-acl::admin.group.group-breadcrumb')

    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
              <div class="col-lg-12">
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

                  <div class="card">
                      <div class="card-header">
                          <i class="icon-lock"></i> Groups List
                      </div>
                      @include('laravel-authentication-acl::admin.group.groups-table')
                  </div>
              </div>
              <!--/.col-->
              </div>
            </div>
        </div>
        @include('laravel-authentication-acl::admin.permission.permission-modal')
    </div>
</div>
@stop

@section('footer_scripts')
    {!! Theme::set('coreui') !!}
    {{-- Theme::js('../bower_components/datatables/media/js/dataTables.bootstrap4.min.js') --}}
    {{-- Theme::js('../bower_components/datatables/media/js/dataTables.foundation.min.js') --}}
    {{-- Theme::js('../bower_components/datatables/media/js/dataTables.jqueryui.min.js') --}}
    {{-- Theme::js('../bower_components/datatables/media/js/dataTables.uikit.min.js') --}}
    {!! Theme::js('../bower_components/datatables/media/js/jquery.dataTables.min.js') !!}

    {!! Theme::js('js/zeroc0d3/groups_list.js') !!}
    <!-- delete without modal -->
    <script>
        $(".delete").click(function(){
            return confirm("Are you sure to delete this item?");
        });
    </script>

    <!-- delete with modal -->
    <!--
    <script>
       $("#executeBtn").click(function() {
          console.log("data deleted...");
          $(".delete").parents('tr').remove();
          $('#dangerModal').modal('hide');
          return;
       });
    </script>
    -->

@stop
