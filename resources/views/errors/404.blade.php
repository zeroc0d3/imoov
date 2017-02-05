@section ('title')
404
@stop
@section('container')
<div class="row justify-content-center">
    <div class="col-sm-6 col-md-6 col-lg-6">
        <div class="card card-accent-danger">
            <div class="card-header">
                <img src="{!! asset('img/logo.png') !!}" width="60%">
            </div>
            <div class="card-block">
                <h1 class="float-left display-4 mr-2">404</h1>
                <h4 class="pt-1">Oops! You're lost.</h4>
                <p class="text-muted">The page you are looking for was not found.</p>
            </div>
            <div class="card-footer">
                <a href="{!! URL::to('/') !!}"><i class="icon-home"></i> Go to homepage</a>
            </div>
        </div>
    </div>
</div>
@stop
