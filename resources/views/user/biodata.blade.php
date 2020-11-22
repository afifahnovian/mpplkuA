@extends('layouts.usr-dashboard')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>User - Biodata</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- App favicon -->
        <link rel="shortcut icon" href="/highdamin/light/assets/images/favicon.ico">

        <!-- App css -->
        <link href="/highdamin/light/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/highdamin/light/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="/highdamin/light/assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <!-- Begin page -->
        <div id="wrapper">

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
         
            <div class="content-page{margin-left:240px;}">
                <div class="content">     
                    <!-- Start Content-->
                    <div class="container-fluid"> 
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- meta -->
                                <div class="profile-user-box card-box bg-primary">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <span class="float-left mr-2"><img src="/highdamin/light/assets/images/users/avatar-7.jpg" alt="" class="avatar-xl rounded-circle"></span>
                                            <div class="media-body text-white">
                                                <h4 class="mt-1 mb-1 text-white font-18"> John Doe </h4>
                                                <p class="font-13"> G64170000</p>
                                                <p class="mb-0"> Departemen Ilmu Komputer </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="text-right">
                                                <button type="button" class="btn btn-light waves-effect">
                                                <a href="{{route('user-biodata-edit')}}">
                                                    <i class="mdi mdi-account-settings mr-1"></i>
                                                    <span> Ubah Biodata </span>
                                                </a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ meta -->
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xl-12">
                                <!-- Personal-Information -->
                                <div class="card-box">
                                    <h1 class="header-title{font-size:40px}">Biodata</h1>
                                    <div class="panel-body">
                                        <div class="text-left">
                                            <p class="text-muted font-28"><strong>Nama :</strong> <span>John Doe</span></p>

                                            <p class="text-muted font-28"><strong>NIM :</strong><span>G64170000</span></p>

                                            <p class="text-muted font-28"><strong>Jenis Kelamin :</strong> <span>Laki-Laki</span></p>

                                            <p class="text-muted font-28"><strong>Nomor HP :</strong> <span>088243176868</span></p>

                                            <p class="text-muted font-28"><strong>Alamat Email :</strong> <span> Doe@gmail.com</span></p>

                                            <p class="text-muted font-28"><strong>Semester:</strong> <span>7</span></p>

                                            <p class="text-muted font-28"><strong>Asal Prodi :</strong> <span>Ilmu Komputer</span></p>

                                            <p class="text-muted font-28"><strong>Asal Departemen :</strong> <span>Ilmu Komputer</span></p>

                                            <p class="text-muted font-28"><strong>Tahun Akademik :</strong> <span>2017/2018</span></p>

                                        </div>

                                        <ul class="social-links list-inline mt-4 mb-0">
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fab fa-skype"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div> <!-- end container-fluid -->
                </div> <!-- end content -->

                

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                              2018 - 2019 &copy; Highdmin theme by <a href="">Coderthemes</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Vendor js -->
        <script src="/highdamin/light/assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="/highdamin/light/assets/js/app.min.js"></script>
        
    </body>
</html>
@endsection