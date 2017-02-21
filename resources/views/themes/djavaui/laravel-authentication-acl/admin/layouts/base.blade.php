{{-- Layout base admin panel --}}
<!DOCTYPE html>
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="id-ID"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="id-ID"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="id-ID"><!--<![endif]-->

<!-- header -->
<html lang="id-ID">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="index, follow" name="robots">

    <meta content="content-language" name="id-ID">
    <meta content="title" name="iMoov Car & Transport">
    <meta content="description" name="Car Rental & Transport System">
    <meta content="keywords" name="imoov, car, transport, laravel, access, control, list, acl, sentry, cartalyst, djavaui">
    <meta content="web_author" name="ZeroC0D3 Team">
    <meta content="copyright" name="MIT License">
    <meta content="google" name="notranslate">

    <meta content="og:url" property="{!! asset('/') !!}">
    <meta content="og:type" property="website">
    <meta content="og:title" property="iMoov Car & Transport">
    <meta content="og:description" property="Car Rental & Transport System">
    <meta content="og:image" property="{!! asset('/') !!}themes/djavaui/assets/img/logo.png">

    <title>iMoov Car & Transport</title>
    <link rel="shortcut icon" href="{!! asset('/') !!}themes/djavaui/assets/img/favicon.png">

    <!-- START @FONT STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:700,400" rel="stylesheet">
    {{-- Theme::css('zeroc0d3/css/open-sans.css') --}}
    {{-- Theme::css('zeroc0d3/css/oswald.css') --}}
    <!--/ END FONT STYLES -->

    <!-- SET THEME SECTION -->
    {!! Theme::set('djavaui') !!}

    <!-- START @GLOBAL MANDATORY STYLES -->
    {!! Theme::css('global/plugins/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}
    <!--/ END GLOBAL MANDATORY STYLES -->

    <!-- START @PAGE LEVEL STYLES -->
    {!! Theme::css('global/plugins/bower_components/fontawesome/css/font-awesome.min.css') !!}
    {!! Theme::css('global/plugins/bower_components/animate.css/animate.min.css') !!}
    {!! Theme::css('global/plugins/bower_components/dropzone/downloads/css/dropzone.css') !!}
    {!! Theme::css('global/plugins/bower_components/jquery.gritter/css/jquery.gritter.css') !!}
    {!! Theme::css('global/plugins/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css') !!}
    <!--/ END PAGE LEVEL STYLES -->


    <!-- START @THEME STYLES -->
    {!! Theme::css('admin/css/reset.css') !!}
    {!! Theme::css('admin/css/layout.css') !!}
    {!! Theme::css('admin/css/components.css') !!}
    {!! Theme::css('admin/css/plugins.css') !!}
    {!! Theme::css('admin/css/pages/sign.css') !!}
    {!! Theme::css('admin/css/custom.css') !!}
    {!! Theme::css('zeroc0d3/css/zeroc0d3.theme.css', ['id' => 'theme']) !!}
    {!! Theme::css('zeroc0d3/css/zeroc0d3.addons.css') !!}
    <!--/ END THEME STYLES -->

    @yield('head_css')
    {{-- End head css --}}

    <!-- START @IE SUPPORT -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    {!! Theme::js('global/plugins/bower_components/html5shiv/dist/html5shiv.min.js') !!}
    {!! Theme::js('global/plugins/bower_components/respond-minmax/dest/respond.min.js') !!}
    <![endif]-->
    <!--/ END IE SUPPORT -->
</head>

    <body class="page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session">
        <!--[if lt IE 9]>
        <p class="upgrade-browser">Upps!! You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- START @WRAPPER -->
        <section id="wrapper">
            @include('laravel-authentication-acl::admin.layouts.header')
            @include('laravel-authentication-acl::admin.layouts.sidebar-left')
            @yield('container')
            {{-- @include('laravel-authentication-acl::admin.layouts.footer') --}}
            @include('laravel-authentication-acl::admin.layouts.sidebar-right')
        </section>
        {{-- @include('laravel-authentication-acl::admin.layouts.footer') --}}

        <!-- START @BACK TOP -->
        <div id="back-top" class="animated pulse circle">
            <i class="fa fa-angle-up"></i>
        </div><!-- /#back-top -->
        <!--/ END BACK TOP -->

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- START @CORE PLUGINS -->
        {!! Theme::js('global/plugins/bower_components/jquery/dist/jquery.min.js') !!}
        {!! Theme::js('global/plugins/bower_components/jquery-cookie/jquery.cookie.js') !!}
        {!! Theme::js('global/plugins/bower_components/bootstrap/dist/js/bootstrap.min.js') !!}
        {!! Theme::js('global/plugins/bower_components/typehead.js/dist/handlebars.js') !!}
        {!! Theme::js('global/plugins/bower_components/typehead.js/dist/typeahead.bundle.min.js') !!}
        {!! Theme::js('global/plugins/bower_components/jquery-nicescroll/jquery.nicescroll.min.js') !!}
        {!! Theme::js('global/plugins/bower_components/jquery.sparkline.min/index.js') !!}
        {!! Theme::js('global/plugins/bower_components/jquery-easing-original/jquery.easing.1.3.min.js') !!}
        {!! Theme::js('global/plugins/bower_components/ionsound/js/ion.sound.min.js') !!}
        {!! Theme::js('global/plugins/bower_components/bootbox/bootbox.js') !!}
        <!--/ END CORE PLUGINS -->

        <!-- START @PAGE LEVEL PLUGINS -->
        {!! Theme::js('global/plugins/bower_components/flot/jquery.flot.js') !!}
        {!! Theme::js('global/plugins/bower_components/flot/jquery.flot.spline.min.js') !!}
        {!! Theme::js('global/plugins/bower_components/flot/jquery.flot.categories.js') !!}
        {!! Theme::js('global/plugins/bower_components/flot/jquery.flot.tooltip.min.jss') !!}
        {!! Theme::js('global/plugins/bower_components/flot/jquery.flot.resize.js') !!}
        {!! Theme::js('global/plugins/bower_components/flot/jquery.flot.pie.js') !!}
        {!! Theme::js('global/plugins/bower_components/dropzone/downloads/dropzone.min.js') !!}
        {!! Theme::js('global/plugins/bower_components/jquery.gritter/js/jquery.gritter.min.js') !!}
        {!! Theme::js('global/plugins/bower_components/skycons-html5/skycons.js') !!}
        {!! Theme::js('global/plugins/bower_components/waypoints/lib/jquery.waypoints.min.js') !!}
        {!! Theme::js('global/plugins/bower_components/counter-up/jquery.counterup.min.js') !!}
        {!! Theme::js('global/plugins/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js') !!}
        {!! Theme::js('global/plugins/bower_components/chosen_v1.2.0/chosen.jquery.min.js') !!}
        {!! Theme::js('global/plugins/bower_components/jquery-mockjax/jquery.mockjax.js') !!}
        {!! Theme::js('global/plugins/bower_components/jquery-validation/dist/jquery.validate.min.js') !!}
        <!--/ END PAGE LEVEL PLUGINS -->

        <!-- START @PAGE LEVEL SCRIPTS -->
        {!! Theme::js('zeroc0d3/js/zeroc0d3.apps.js') !!}
        {!! Theme::js('zeroc0d3/js/zeroc0d3.dashboard.js') !!}
        {{-- Theme::js('admin/js/demo.js') --}}
        <!--/ END PAGE LEVEL SCRIPTS -->
        <!--/ END JAVASCRIPT SECTION -->

        @yield('footer_scripts')
        {{-- End footer scripts --}}

        <!-- START GOOGLE ANALYTICS -->
        {{--
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-xxxx-x', 'auto');
            ga('send', 'pageview');
        </script>
        --}}
        <!--/ END GOOGLE ANALYTICS -->
    </body>
</html>
