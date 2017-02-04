<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $data['title'] }}</title>

    <!-- Bootstrap Core CSS -->
    <link media="all" type="text/css" rel="stylesheet" href="{{ $data['assetPath'] }}/css/bootstrap.min.css">
    
    <!-- Custom Fonts -->
    <link media="all" type="text/css" rel="stylesheet" href="{{ $data['assetPath'] }}/css/font-awesome.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link media="all" type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link media="all" type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link media="all" type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    
    <!-- Theme CSS -->
    <link media="all" type="text/css" rel="stylesheet" href="{{ $data['assetPath'] }}/css/agency.css">
    
  </head>

      <body id="page-top" class="index">

        <!-- Navigation -->
        <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top"><i class="fa fa-car"></i> {{ $data['title'] }}</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#page-top">Home</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about">About</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#how">How</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#features">Features</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#testimonial">Testimonial</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contact Us</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="login">Login</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

    @yield('content')

    <footer>
      <p>
        &copy; Laravel & ZeroC0D3 Engineer 2017
      </p>
    </footer>

    <!-- jQuery -->
    <script src="{{ $data['assetPath'] }}/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ $data['assetPath'] }}/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{ $data['assetPath'] }}/js/jqBootstrapValidation.js"></script>
    <script src="{{ $data['assetPath'] }}/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="{{ $data['assetPath'] }}/js/agency.js"></script>
  </body>
</html>
