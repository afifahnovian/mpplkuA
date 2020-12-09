
<!DOCTYPE html>
    <html lang="en">

        <head>
            <meta charset="utf-8" />
            <title>SIMARSIP - Sistem Manajemen Arsip FMIPA IPB </title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
            <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
            <meta name="author" content="Shreethemes" />
            <meta name="Version" content="2.0" />
            <!-- favicon -->
            <link rel="shortcut icon" href="images/favicon.ico">
            <!-- Bootstrap -->
            <link href="{{asset('landrick/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
            <!-- Magnific -->
            <link href="{{asset('landrick/css/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
            <!-- Icons -->
            <link href="{{asset('landrick/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css" />
            <!-- Slider -->               
            <link rel="stylesheet" href="{{asset('landrick/css/owl.carousel.min.css')}}"/> 
            <link rel="stylesheet" href="{{asset('landrick/css/owl.theme.default.min.css')}}"/> 
            <!-- Main Css -->
            <link href="{{asset('landrick/css/style.css')}}" rel="stylesheet" type="text/css" />
            <link href="{{asset('landrick/css/colors/default.css')}}" rel="stylesheet">

        </head>
        <body>
            <div id="app">
            <!-- navbar or sidebar here -->
            <!-- Navbar STart -->
            <header id="topnav" class="defaultscroll sticky">
                <div class="container">
                    <!-- Logo container-->
                    <div>
                        <a class="logo" href="#">SIMARSIP</a>
                    </div>                 
                    <div class="buy-button">
                        <a href="{{route('user-login')}}" class="btn btn-primary">Masuk</a>
                    </div><!--end login button-->
                    <!-- End Logo container-->
                    <div class="menu-extras">
                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>
            
                    <div id="navigation">
                        <!-- Navigation Menu-->   
                        <div class="buy-menu-btn d-none">
                            <a href="#" target="_blank" class="btn btn-primary">Masuk</a>
                        </div><!--end login button-->
                    </div><!--end navigation-->
                </div><!--end container-->
            </header><!--end header-->
            <!-- Navbar End -->
            
            <main>
                @yield('content')
            </main>
            </div>

            <!-- JS -->
            <script src="{{asset('landrick/js/jquery.min.js')}}"></script>
            <script src="{{asset('landrick/js/bootstrap.bundle.min.js')}}"></script>
            <script src="{{asset('landrick/js/jquery.easing.min.js')}}"></script>
            <script src="{{asset('landrick/js/scrollspy.min.js')}}"></script>
            <!-- Magnific Popup -->
            <script src="{{asset('landrick/js/jquery.magnific-popup.min.js')}}"></script> 
            <script src="{{asset('landrick/js/magnific.init.js')}}"></script> 
            <!-- SLIDER -->
            <script src="{{asset('landrick/js/owl.carousel.min.js')}} "></script>
            <script src="{{asset('landrick/js/owl.init.js')}} "></script>
            
            <!-- Main Js -->
            <script src="{{asset('landrick/js/app.js')}}"></script>
        </body>
    </html>