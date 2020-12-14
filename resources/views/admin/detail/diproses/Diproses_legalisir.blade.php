@extends('layouts.layoutadmin')

@section('content')
<div class="card-box">
           <div class="card-header"> 
             <h3> STATUS SURAT </h3>                
<h4><span class="badge label-table badge-warning">Diproses</span></h4>
 </div>

<h3>Unggah Berkas</h3>

<div class="row">
    <div class="col-4">
            <input type="file" id="suratpengantardept" class="form-control" placeholder=".pdf">
    </div>
    <div class="col">
    <a href="{{route('admin-selesai')}}"> 
        <button style="max-width: 10rem;" type="submit" class="btn btn-success btn-block">SUBMIT</button>
    </a>
    </div>
</div>


<body>
        <!-- Begin page -->
        <div id="wrapper">
            <div class="content-page{margin-left:240px;}">
                <div class="content">     
                    <!-- Start Content-->
                    <div class="container-fluid"> 
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- Personal-Information -->
                                <div class="card-box">
                                    <h3 class="header-title{font-size:40px}">Surat Legalisir Transkip</h3> <br>
                                        <div class="panel-body">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-2">
                                                    Nama
                                                    </div>
                                                    <div class="col-1">
                                                    :
                                                    </div>
                                                    <div class="col-2">
                                                    Afifah Noviani
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-2">
                                                    NIM
                                                    </div>
                                                    <div class="col-1">
                                                    :
                                                    </div>
                                                    <div class="col-2">
                                                    G64170023
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-2">
                                                    Jenis Kelamin
                                                    </div>
                                                    <div class="col-1">
                                                    :
                                                    </div>
                                                    <div class="col-2">
                                                    Perempuan
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-2">
                                                    Nomor HP
                                                    </div>
                                                    <div class="col-1">
                                                    :
                                                    </div>
                                                    <div class="col-2">
                                                    0895366362474
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-2">
                                                    Alamat Email 
                                                    </div>
                                                    <div class="col-1">
                                                    :
                                                    </div>
                                                    <div class="col-3">
                                                    afifah_novian@apps.ipb.ac.id
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-2">
                                                    Keperluan Pengajuan Surat
                                                    </div>
                                                    <div class="col-1">
                                                    :
                                                    </div>
                                                    <div class="col-5">
                                                    alasan
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-2">
                                                    File KTM
                                                    </div>
                                                    <div class="col-1">
                                                    :
                                                    </div>
                                                    <div class="col-2">
                                                    <a href = "#"> KTM.JPG </a>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-2">
                                                    Unggah Transkrip yang akan Dilegalisir
                                                    </div>
                                                    <div class="col-1">
                                                    :
                                                    </div>
                                                    <div class="col-2">
                                                    <a href = "#">Transkrip yang akan Dilegalisir.pdf </a>
                                                    </div>
                                                </div>
 
                                                <!-- end row -->
                                            </div>
                                        </div>
                                
                                </div>
                            </div>
                        </div>
                    </div> <!-- end container-fluid -->
                </div> <!-- end content -->

              

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        
        
    </body>
    
@endsection