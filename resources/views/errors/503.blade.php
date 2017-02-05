@section ('title')
503
@stop
@section('container')
<div class="row justify-content-center">
    <div class="col-sm-6 col-md-6 col-lg-6">
        <div class="card card-accent-danger">
            <div class="card-header">
                <img src="{!! asset('img/logo.png') !!}" width="60%">
            </div>
            <div class="card-block">
                <h1 class="float-left display-4 mr-2">503</h1>
                <h4 class="pt-1">Houston, we have a problem!</h4>
                <p class="text-muted">The page you are looking for is temporarily unavailable.</p>
            </div>
            <div class="card-footer">
                <a href="{!! URL::to('/') !!}"><i class="icon-home"></i> Go to homepage</a>
            </div>
        </div>
    </div>
</div>
@stop
