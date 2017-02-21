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
    <meta content="keywords" name="imoov, car, transport, laravel, access, control, list, acl, sentry, cartalyst, coreui">
    <meta content="web_author" name="ZeroC0D3 Team">
    <meta content="copyright" name="MIT License">
    <meta content="google" name="notranslate">

    <meta content="og:url" property="{!! asset('/') !!}">
    <meta content="og:type" property="website">
    <meta content="og:title" property="iMoov Car & Transport">
    <meta content="og:description" property="Car Rental & Transport System">
    <meta content="og:image" property="{!! asset('/') !!}themes/coreui-front/assets/img/logo.png">

    <title>iMoov Car & Transport</title>
    <link rel="shortcut icon" href="{!! asset('/') !!}themes/coreui-front/assets/img/favicon.png">

    {!! Theme::set('coreui') !!}
    {!! Theme::css('css/font-awesome.min.css') !!}
    {!! Theme::css('css/simple-line-icons.css') !!}
    {!! Theme::css('css/style.css') !!}
    {!! Theme::css('css/zeroc0d3.css') !!}

    {!! Theme::css('css/core/layout.css') !!}
    {!! Theme::css('css/core/components.css') !!}
    {!! Theme::css('css/core/plugins.css') !!}

    @yield('head_css')
    {{-- End head css --}}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

    <body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
        {{-- navbar --}}
        @include('laravel-authentication-acl::admin.layouts.navbar')

        {{-- content --}}
        <div class="app-body">
            @include('laravel-authentication-acl::admin.layouts.sidebar')
            @yield('container')
            {{-- @include('laravel-authentication-acl::admin.layouts.aside') --}}
        </div>

        @include('laravel-authentication-acl::admin.layouts.footer')
        {{-- Start footer scripts --}}
        @yield('before_footer_scripts')

        {{-- Start footer scripts --}}
        <!-- Bootstrap and necessary plugins -->
        {!! Theme::js('../bower_components/jquery/dist/jquery.min.js') !!}
        {!! Theme::js('../bower_components/tether/dist/js/tether.min.js') !!}
        {!! Theme::js('../bower_components/bootstrap/dist/js/bootstrap.min.js') !!}
        {!! Theme::js('../bower_components/pace/pace.min.js') !!}

        <!-- GenesisUI main scripts -->
        {!! Theme::js('js/app.js') !!}

        @yield('footer_scripts')
        {{-- End footer scripts --}}
    </body>
</html>
