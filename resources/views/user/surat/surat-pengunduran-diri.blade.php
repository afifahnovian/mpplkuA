<!-- extends user-dashboar layout -->
@extends('layouts.usr-dashboard')
@section('page-name','Surat Pengunduran Diri') <!-- Page name in breadcrumb -->

@section('content')        
    <div class="card-box">
    @if (session()->has('success'))
            <div class="alert alert-dismissible alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h4 class="header-title">Surat Pengunduran Diri</h4>
        <br>
        <div class="row">
            <div class="col">
                <form action="{{route('create-user-surat-pengunduran-diri')}}" role="form" class="form-horizontal" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <!-- Waktu Pengunduran -->
                    <div>
                        <div class="form-group col">
                            <div class="col">
                                <h5 class="sub-header title" style="color:info">Waktu Pengunduran</h5>
                                <hr style="color:gray">
                            </div>
                        </div>
                        <div class="form-row col">
                            <div class="form-group col-md-6">
                                <label class="col" for="tanggalPengunduran">Tanggal Pengunduran</label>
                                <div class="col">
                                    <input class="form-control" id="tanggalPengunduran" type="date"  name="tanggalPengunduran" >
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="col" for="tahunAkademikPengunduran">Tahun Akademik</label>
                                <div class="col">
                                    <input type="number" id="tahunAkademikPengunduran" name="tahunAkademikPengunduran" class="form-control" placeholder="Contoh : 2017" >
                                </div>
                            </div>   
                        </div>
                            <div class="form-group col-md-6">
                                <label class="col" for="tahunTerakhirAktif">Terakhir Aktif sbg Mahasiswa pada Tahun Akademik</label>
                                <div class="col">
                                    <input type="number" id="tahunTerakhirAktif" name="tahunTerakhirAktif" class="form-control" placeholder="Contoh : 2017" >
                                </div>
                            </div>
                    </div>
                    
                    <!-- File yang dibutuhkan -->
                    <br>
                    <div>
                        <div class="form-group col">
                            <div class="col">
                                <h5 class="sub-header title" style="color:info">File yang Dibutuhkan</h5>
                                <hr style="color:gray">
                            </div>
                        </div>
                        <!-- KTM -->
                        <div class="form-group col">
                            <label class="col" for="fileKTM">Unggah File KTM</label>
                            <div class="col">
                                <input type="file" id="fileKTM" name="fileKTM" class="form-control" placeholder=".jpg / .png" >
                            </div>
                        </div>

                        <!-- Surat Pengantar Departemen -->
                        <div class="form-group col">
                            <label class="col" for="fileSuratPengantarDept">Unggah Surat Pengantar Departemen</label>
                            <div class="col">
                                <input type="file" id="fileSuratPengantarDept" name="fileSuratPengantarDept" class="form-control" placeholder=".pdf" >
                            </div>
                        </div>

                        <!-- Surat Pengajuan Mahasiswa -->
                        <div class="form-group col">
                            <label class="col" for="fileSuratPengajuanMahasiswa">Unggah Surat Pengajuan Mahasiswa</label>
                            <div class="col">
                                <input type="file" id="fileSuratPengajuanMahasiswa" name="fileSuratPengajuanMahasiswa" class="form-control" placeholder=".pdf" >
                            </div>
                        </div>
                    </div>
                        
                    <!-- Submit -->
                    <div class="form-group col">
                        <div class="col">
                            <button type="submit" class="btn btn-primary btn-block" block>Ajukan Surat</button>
                        </div>
                    </div>                
                </form>
            </div>
        </div>
    </div>
@endsection