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
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Oswald:700,400" rel="stylesheet">
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
    <!--/ END PAGE LEVEL STYLES -->


    <!-- START @THEME STYLES -->
    {!! Theme::css('admin/css/reset.css') !!}
    {!! Theme::css('admin/css/layout.css') !!}
    {!! Theme::css('admin/css/components.css') !!}
    {!! Theme::css('admin/css/plugins.css') !!}
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

    <body>
        <!--[if lt IE 9]>
        <p class="upgrade-browser">Upps!! You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        {{-- content --}}
        <div class="container">
            @yield('container')
        </div>

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
