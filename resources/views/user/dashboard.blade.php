<!-- extends user-dashboar layout -->
@extends('layouts.usr-dashboard')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>User - Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                                    <h1 class="header-title{font-size:px;}">Pengajuan Surat</h1>

                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-12 text-sm-center form-inline">
                                                <div class="form-group mr-2">
                                                    <select id="demo-foo-filter-status" class="custom-select">
                                                        <option value="">Tampilkan Semua</option>
                                                        <option value="Selesai">Selesai</option>
                                                        <option value="Ditolak">Ditolak</option>
                                                        <option value="Diproses">Diproses</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input id="demo-foo-search" type="text" placeholder="Cari Surat" class="form-control" autocomplete="on">
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
                                            <td><a href = "{{route('user-legalisir-transkrip-detail')}}" span class="btn btn-link btn">Lihat Pengajuan</a> </span></td>
                                        </tr>
                                        <tr>
                                            <td>Surat Keterangan Aktif Mahasiswa</td>
                                            <td>10 November 2020</td>
                                            <td><span class="badge label-table badge-success">Selesai</span></td>
                                            <td><a href = "{{route('user-surat-keterangan-aktif-detail')}}" span class="btn btn-link btn"">Lihat Pengajuan</a> </span></td>
                                        </tr>
                                        <tr>
                                            <td>Legalisir Transkrip Mahasiswa Aktif</td>
                                            <td>28 Oktober 2020</td>
                                            <td><span class="badge label-table badge-danger">Ditolak</span></td>
                                            <td><a href = "#" span class="btn btn-link btn"">Lihat Pengajuan</a> </span></td>
                                        </tr>
                                        <tr>
                                            <td>Surat Keterangan Lulus Mahasiswa</td>
                                            <td>26 Oktober 2020</td>
                                            <td><span class="badge label-table badge-success">Selesai</span></td>
                                            <td><a href = "{{route('user-surat-keterangan-lulus')}}" span class="btn btn-link btn"">Lihat Pengajuan</a> </span></td>
                                        </tr>
                                        <tr>
                                            <td>Surat Perpanjangan Masa Studi Mahasiswa</td>
                                            <td>19 Juni 2020</td>
                                            <td><span class="badge label-table badge-success">Selesai</span></td>
                                            <td><a href = "{{route('user-surat-perpanjangan-masa-studi-detail')}}" span class="btn btn-link btn"">Lihat Pengajuan</a> </span></td>
                                        </tr>
                                        <tr>
                                            <td>Surat Pengunduran Diri Mahasiswa</td>
                                            <td>17 Januari 2019</td>
                                            <td><span class="badge label-table badge-danger">Ditolak</span></td>
                                            <td><a href = "{{route('user-surat-pengunduran-diri-detail')}}" span class="btn btn-link btn"">Lihat Pengajuan</a> </span></td>
                                        </tr>
                                        <tr>
                                            <td>Surat Keterangan Aktif Setelah Cuti Mahasiswa</td>
                                            <td>8 Desember 2018</td>
                                            <td><span class="badge label-table badge-danger">Ditolak</span></td>
                                            <td><a href = "{{route('user-surat-keterangan-aktif-cuti-detail')}}" span class="btn btn-link btn"">Lihat Pengajuan</a> </span></td>
                                        </tr>
                                        <tr>
                                            <td>Surat Keterangan Cuti Mahasiswa</td>
                                            <td>31 Mei 2018</td>
                                            <td><span class="badge label-table badge-danger">Ditolak</span></td>
                                            <td><a href = "{{route('user-surat-keterangan-cuti-detail')}}" span class="btn btn-link btn"">Lihat Pengajuan</a> </span></td>
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