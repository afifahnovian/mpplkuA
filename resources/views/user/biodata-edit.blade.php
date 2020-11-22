@extends('layouts.usr-dashboard')
@section('page-name','Biodata') <!-- Page name in breadcrumb -->

<!-- Content Here -->

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>User - Biodata</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

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
                            <div class="col-12">
                                <div class="card-box">
                                    <h1 class="header-title{font-size:40px}">Ubah Biodata</h1>

                                    <br>
                                    <br>

                                    <div class="row">
                                        <div class="col-12">
                                            <div>
                                                <form class="form-horizontal" role="form", action = "/user/biodata">
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="name">Nama</label>
                                                        <div class="col-md-10">
                                                            <input type="text" id="name" class="form-control" value="John Doe">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="id">NIM</label>
                                                        <div class="col-md-10">
                                                            <input type="id" id="id" name="id" class="form-control" value="G64170000">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label">Jenis Kelamin</label>
                                                        <div class="col-md-10">
                                                            <select class="form-control">
                                                                <option value = "Laki-Laki" selected = "">Laki-Laki</option>
                                                                <option value = "Perempuan">Perempuan</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="phone-number">Nomor Telepon</label>
                                                        <div class="col-md-10">
                                                            <input type="text" id="phone-number" class="form-control" value="088243176868">
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="email">Alamat Email</label>
                                                        <div class="col-md-10">
                                                            <input type="text" id="email" class="form-control" value="Doe@gmail.com">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label">Semester</label>
                                                        <div class="col-md-10">
                                                            <select class="form-control">
                                                                <option value = "1">1</option>
                                                                <option value = "2">2</option>
                                                                <option value = "3">3</option>
                                                                <option value = "4">4</option>
                                                                <option value = "5">5</option>
                                                                <option value = "6">6</option>
                                                                <option value = "7" selected = "">7</option>
                                                                <option value = "8">8</option>
                                                                <option value = "9">9</option>
                                                                <option value = "10">10</option>
                                                                <option value = "11">11</option>
                                                                <option value = "12">12</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="major">Asal Program Studi</label>
                                                        <div class="col-md-10">
                                                            <input type="text" id="major" class="form-control" value="Ilmu Komputer">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="department">Asal Departemen</label>
                                                        <div class="col-md-10">
                                                            <input type="text" id="department" class="form-control" value="Ilmu Komputer">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label">Tahun Akademik</label>
                                                        <div class="col-md-10">
                                                            <select class="form-control">
                                                                <option value = "2020/2021">2020/2021</option>
                                                                <option value = "2019/2020<">2019/2020</option>
                                                                <option value = "2018/2019">2018/2019</option>
                                                                <option value = "2017/2018" selected = "">2017/2018</option>
                                                                <option value = "2016/2017">2016/2017</option>
                                                                <option value = "2015/2016">2015/2016</option>
                                                                <option value = "2014/2015">2014/2015</option>
                                                                <option value = "2013/2014">2013/2014</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!--
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label">Readonly</label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" readonly="" value="Readonly value">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label">Disabled</label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" disabled="" value="Disabled value">
                                                        </div>
                                                    </div>
                                                    -->
                                                    <br>
                                                    <td> <button onclick="location.href='{{url('user/biodata.blade.php')}}'" type="submit" class="btn btn-primary">Simpan Perubahan</button></td>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->

                                </div> <!-- end card-box -->
                            </div><!-- end col -->
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