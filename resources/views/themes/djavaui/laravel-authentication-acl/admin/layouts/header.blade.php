<!-- START @HEADER -->
<header id="header">

    <!-- Start header left -->
    <div class="header-left">
        <!-- Start offcanvas left: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
        <div class="navbar-minimize-mobile left">
            <i class="fa fa-bars"></i>
        </div>
        <!--/ End offcanvas left -->

        <!-- Start navbar header -->
        <div class="navbar-header">

            <!-- Start brand -->
            <a id="tour-1" class="navbar-brand" href="{!! URL::route('dashboard.default') !!}">
                {!! Theme::img('img/logo-icon.png', 'brand-logo', 'logo-navbar') !!}
            </a><!-- /.navbar-brand -->
            <!--/ End brand -->

        </div><!-- /.navbar-header -->
        <!--/ End navbar header -->

        <div class="clearfix"></div>
    </div><!-- /.header-left -->
    <!--/ End header left -->

    <!-- Start header right -->
    <div class="header-right">
        @include('laravel-authentication-acl::admin.layouts.navbar')
    </div><!-- /.header-right -->
    <!--/ End header left -->

</header> <!-- /#header -->
<!--/ END HEADER -->
