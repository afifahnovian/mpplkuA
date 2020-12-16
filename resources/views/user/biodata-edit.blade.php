@extends('layouts.usr-dashboard')
@section('page-name','Biodata') <!-- Page name in breadcrumb -->

<!-- Content Here -->

@section('content')

    <!-- Begin page -->
    <div id="wrapper">

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        
        <div class="content-page{margin-left:240px;}">
            <div class="content" >

                <!-- Start Content-->
                <div class="container-fluid">
                    <div class="row" >
                        <div class="col-12">
                            <div class="card-box">
                                <h1 class="header-title{font-size:40px}">Ubah Biodata</h1>

                                <br>
                                <br>

                                <div class="row">
                                    <div class="col-12">
                                        <div>
                                            <form class="form-horizontal" action="{{route('user-biodata-update')}}" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                                <div class="form-group col">
                                                    <label class="col" for="foto_profil">Unggah Foto Profil</label>
                                                    <div class="col">
                                                        <input type="file" id="foto_profil" name="foto_profil" accept="image/*"  class="form-control" placeholder=".jpg / .png">
                                                    </div>
                                                </div>
                                                <input type="number" name="id" value="{{ $biodata_user->id }}" hidden>
                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label" for="name" >Nama</label>
                                                    <div class="col-md-10">
                                                        <input type="text" id="name" class="form-control" name="nama" readonly="" value="{{$user->nama}}">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label" for="id">NIM</label>
                                                    <div class="col-md-10">
                                                        <input type="id" id="id" name="nim" class="form-control" readonly="" value="{{$user->nim}}">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label">Jenis Kelamin</label>
                                                    <div class="col-md-10">
                                                        <select class="form-control" name="jeniskelamin" value="{{$biodata_user->jenis_Kelamin}}">
                                                            <option value = "Laki-Laki">Laki-Laki</option>
                                                            <option value = "Perempuan">Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label" for="phone-number">Nomor Telepon</label>
                                                    <div class="col-md-10">
                                                        <input type="text" id="phone-number" name="nomortelepon" class="form-control" value="{{$biodata_user->nomor_Telepon}}">
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label" for="email">Alamat Email</label>
                                                    <div class="col-md-10">
                                                        <input type="text" id="email" class="form-control" readonly="" value="{{$user->email}}">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label">Semester</label>
                                                    <div class="col-md-10">
                                                        <select class="form-control" name="semester" value="{{$biodata_user->semester}}">
                                                            <option value = "1">1</option>
                                                            <option value = "2">2</option>
                                                            <option value = "3">3</option>
                                                            <option value = "4">4</option>
                                                            <option value = "5">5</option>
                                                            <option value = "6">6</option>
                                                            <option value = "7">7</option>
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
                                                        <input type="text" id="major" class="form-control" name="asalprodi" value="{{$biodata_user->asal_Prodi}}">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label" for="department">Asal Departemen</label>
                                                    <div class="col-md-10">
                                                        <input type="text" id="department" class="form-control" name="departemen" value="{{$biodata_user->departemen}}">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label">Tahun Akademik</label>
                                                    <div class="col-md-10">
                                                        <select class="form-control" name="tahunakademik" value="{{$biodata_user->tahun_Akademik}}">
                                                            <option value = "2020/2021">2020/2021</option>
                                                            <option value = "2019/2020<">2019/2020</option>
                                                            <option value = "2018/2019">2018/2019</option>
                                                            <option value = "2017/2018" >2017/2018</option>
                                                            <option value = "2016/2017">2016/2017</option>
                                                            <option value = "2015/2016">2015/2016</option>
                                                            <option value = "2014/2015">2014/2015</option>
                                                            <option value = "2013/2014">2013/2014</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <br>
                                                <td> <button type="submit" class="btn btn-primary">Simpan Perubahan</button></td>
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
@endsection