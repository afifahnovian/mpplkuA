<!-- extends user-dashboar layout -->
@extends('layouts.usr-dashboard')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Highdmin - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="highdamin/light/assets/images/favicon.ico">

        <!-- Footable css -->
        <link href="highdamin/light/assets/libs/footable/footable.core.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="highdamin/light/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="highdamin/light/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="highdamin/light/assets/css/app.min.css" rel="stylesheet" type="text/css" />

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
                                    <h1 class="header-title">Pengajuan Surat</h1>

                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-12 text-sm-center form-inline">
                                                <div class="form-group mr-2">
                                                    <select id="demo-foo-filter-status" class="custom-select">
                                                        <option value="">Show all</option>
                                                        <option value="Selesai">Selesai</option>
                                                        <option value="Ditolak">Ditolak</option>
                                                        <option value="Diproses">Diproses</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input id="demo-foo-search" type="text" placeholder="Search" class="form-control" autocomplete="on">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                    <table id="demo-foo-filtering" class="table table-striped table-bordered toggle-circle mb-0" data-page-size="7">
                                        <thead>
                                        <tr>
                                            <th data-hide="phone">Surat</th>
                                            <th data-hide="phone, tablet">Tanggal</th>
                                            <th data-hide="phone, tablet">Status</th>
                                            <th data-hide="phone, tablet">Tindakan</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Legalisir Transkrip Mahasiswa Aktif</td>
                                            <td>15 November 2020</td>
                                            <td><span class="badge label-table badge-warning">Diproses</span></td>
                                            <td><a href = "#" span class="badge label-table badge-info">Tindakan </a> </span></td>
                                        </tr>
                                        <tr>
                                            <td>Surat Keterangan Aktif Mahasiswa</td>
                                            <td>10 November 2020</td>
                                            <td><span class="badge label-table badge-success">Selesai</span></td>
                                            <td><a href = "#" span class="badge label-table badge-info">Tindakan </a> </span></td>
                                        </tr>
                                        <tr>
                                            <td>Legalisir Transkrip Mahasiswa Aktif</td>
                                            <td>28 Oktober 2020</td>
                                            <td><span class="badge label-table badge-danger">Ditolak</span></td>
                                            <td><a href = "#" span class="badge label-table badge-info">Tindakan </a> </span></td>
                                        </tr>
                                        <tr>
                                            <td>Surat Perpanjangan Masa Studi</td>
                                            <td>19 Juni 2020</td>
                                            <td><span class="badge label-table badge-success">Selesai</span></td>
                                            <td><a href = "#" span class="badge label-table badge-info">Tindakan </a> </span></td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr class="active">
                                            <td colspan="5">
                                                <div class="text-right">
                                                    <ul class="pagination pagination-split justify-content-end footable-pagination"></ul>
                                                </div>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
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

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close"></i>
                </a>
                <h5 class="m-0 text-white">Settings</h5>
            </div>
            <div class="slimscroll-menu">
                <hr class="mt-0">
                <h5 class="pl-3">Basic Settings</h5>
                <hr class="mb-0" />


                <div class="p-3">
                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                        <label class="custom-control-label" for="customCheck1">Notifications</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="customCheck2" checked>
                        <label class="custom-control-label" for="customCheck2">API Access</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                        <label class="custom-control-label" for="customCheck3">Auto Updates</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="customCheck4" checked>
                        <label class="custom-control-label" for="customCheck4">Online Status</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                        <label class="custom-control-label" for="customCheck5">Auto Payout</label>
                    </div>
                </div>

                <!-- Messages -->
                <hr class="mt-0" />
                <h5 class="pl-3 pr-3">Messages <span class="float-right badge badge-pill badge-danger">24</span></h5>
                <hr class="mb-0" />
                <div class="p-3">
                    <div class="inbox-widget">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-1.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);">Chadengle</a></p>
                            <p class="inbox-item-text">Hey! there I'm available...</p>
                            <p class="inbox-item-date">13:40 PM</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);">Tomaslau</a></p>
                            <p class="inbox-item-text">I've finished it! See you so...</p>
                            <p class="inbox-item-date">13:34 PM</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);">Stillnotdavid</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                            <p class="inbox-item-date">13:17 PM</p>
                        </div>

                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);">Kurafire</a></p>
                            <p class="inbox-item-text">Nice to meet you</p>
                            <p class="inbox-item-date">12:20 PM</p>

                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);">Shahedk</a></p>
                            <p class="inbox-item-text">Hey! there I'm available...</p>
                            <p class="inbox-item-date">10:15 AM</p>

                        </div>
                    </div> <!-- end inbox-widget -->
                </div> <!-- end .p-3-->

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="highdamin/light/assets/js/vendor.min.js"></script>

         <!-- Footable js -->
         <script src="highdamin/light/assets/libs/footable/footable.all.min.js"></script>

         <!-- Init js -->
         <script src="highdamin/light/assets/js/pages/foo-tables.init.js"></script>

        <!-- App js -->
        <script src="highdamin/light/assets/js/app.min.js"></script>
        
    </body>
</html>
@endsection