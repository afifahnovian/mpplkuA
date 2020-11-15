<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- Remove Tap Highlight on Windows Phone IE -->
        <meta name="msapplication-tap-highlight" content="no"/>
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>Dashboard - Simarsip</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
        <!-- <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
        <link href="../../assets/plugins/waves/waves.min.css" rel="stylesheet"> -->
         <!-- CSS -->
         @include('includes.activation-css')
      
        <!-- Theme Styles -->
        <!-- <link href="../../assets/css/alpha.min.css" rel="stylesheet">
        <link href="../../assets/css/custom.css" rel="stylesheet"> -->
    </head>
    <body>
        <div class="alpha-app">
            <!-- Page Header -->
            <div class="page-header">
                <nav class="navbar navbar-expand primary">
                    <section class="material-design-hamburger navigation-toggle">
                        <a href="javascript:void(0)" data-activates="slide-out" class="button-collapse material-design-hamburger__icon">
                            <span class="material-design-hamburger__layer"></span>
                        </a>
                    </section>
                    <a class="navbar-brand" href="#">SIMARSIP</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
            </div>
            
            <!-- Side Bar -->
            <div class="page-sidebar">
                <div class="page-sidebar-inner">
                    <div class="page-sidebar-profile">
                        <div class="sidebar-profile-image">
                            <img src="{{asset('alpha/images/avatars/avatar1.png')}}">
                        </div>
                        <div class="sidebar-profile-info">
                            <a href="javascript:void(0);" class="account-settings-link">
                                <p>Nama user</p>
                                <span>G64170000<i class="material-icons float-right">arrow_drop_down</i></span>
                            </a>
                        </div>
                    </div>
                    <div class="page-sidebar-menu">
                        <div class="page-sidebar-settings hidden">
                            <ul class="sidebar-menu list-unstyled">
                                <li class="divider"></li>
                                <li><a href="#" class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Keluar</a></li>
                            </ul>
                        </div>
                        <div class="sidebar-accordion-menu">
                            <ul class="sidebar-menu list-unstyled">
                                <li>
                                    <a href="index.html" class="waves-effect waves-grey">
                                        <i class="material-icons">settings_input_svideo</i>Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html" class="waves-effect waves-grey">
                                        <i class="material-icons">tag_faces</i>Biodata
                                    </a>
                                </li>
                                <li class="active-page">
                                    <a href="#" class="waves-effect waves-grey shown-menu">
                                        <i class="material-icons">mode_edit</i>Pengajuan Surat<i class="material-icons sub-arrow">keyboard_arrow_right</i>
                                    </a>
                                    <ul class="accordion-submenu list-unstyled">
                                        <li><a href="#" class="active">Surat Keterangan Mahasiswa Aktif </a></li>
                                        <li><a href="#">Surat Keterangan Lulus </a></li>
                                        <li><a href="#">Surat Perpanjangan Masa Studi</a></li>
                                        <li><a href="#">Surat Pengunduran Diri</a></li>
                                        <li><a href="#">Surat Keterangan Cuti</a></li>
                                        <li><a href="#">Surat Keterangan Aktif Setelah Cuti</a></li>
                                        <li><a href="#">Legalisir Transkrip</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-footer">
                        <p class="copyright">Stacks ©</p>
                        <a href="#!">Privacy</a> &amp; <a href="#!">Terms</a>
                    </div>
                </div>
            </div>
            <!-- Main content -->
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <main>
                                @yield('content')
                            </main>
                        </div>
                    </div>
                </div>
                
            </div>
            
            
        </div>
        
        <!-- Javascripts -->
        
        @include('includes.activation-js')
        <!-- JS-->
    </body>
</html>