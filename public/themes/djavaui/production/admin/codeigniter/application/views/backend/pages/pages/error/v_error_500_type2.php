<!-- Start page header -->
<div class="header-content">
    <h2><i class="fa fa-ban"></i>Error 500 <span>internal server error</span></h2>
    <div class="breadcrumb-wrapper hidden-xs">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="<?php echo base_url($this->config->item('link_url').'/dashboard')?>">Dashboard</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Pages</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li class="active">Error 500</li>
        </ol>
    </div>
</div><!-- /.header-content -->
<!--/ End page header -->

<!-- Start body content -->
<div class="body-content animated fadeIn">

    <div class="row">
        <div class="col-md-12">

            <!-- START @ERROR PAGE -->
            <div class="error-wrapper">
                <h1>500</h1>
                <h3>Internal Server Error.</h3>
                <h4>Sorry, something went wrong.</h4>
                <a href="#" class="btn btn-sm btn-theme">Return to Home</a>
                <a href="#" class="btn btn-sm btn-theme">Go to Dashboard</a>
            </div>
            <!--/ END ERROR PAGE -->

        </div>
    </div><!-- /.row -->

</div><!-- /.body-content -->
<!--/ End body content -->