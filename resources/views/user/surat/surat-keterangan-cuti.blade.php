<!-- extends user-dashboar layout -->
@extends('layouts.usr-dashboard')
@section('page-name','Surat Keterangan Cuti') <!-- Page name in breadcrumb -->

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
        <h4 class="header-title">Surat Keterangan Cuti</h4>
        <br>
        <div class="row">
            <div class="col">
                <form action="{{route('create-user-surat-keterangan-cuti')}}" role="form" class="form-horizontal" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <!-- Waktu Cuti -->
                    <div>
                        <div class="form-group col">
                            <div class="col">
                                <h5 class="sub-header title" style="color:info">Waktu Cuti</h5>
                                <hr style="color:gray">
                            </div>
                        </div>
                        <div class="form-row col">
                            <div class="form-group col-md-6">
                                <label class="col" for="waktuCuti_TahunAkademik" >Tahun Akademik</label>
                                <div class="col">
                                    <input type="number" id="waktuCuti_TahunAkademik"  name="waktuCuti_TahunAkademik"  class="form-control" placeholder="Contoh : 2017">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="col" for="waktuCuti_Semester">Semester</label>
                                <div class="col">
                                    <select class="form-control" name="waktuCuti_Semester">
                                        <option value = "Ganjil">Ganjil</option>
                                        <option value = "Genap">Genap</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col">
                            <label class="col" for="alasanCuti">Alasan Cuti</label>
                            <div class="col">
                                <input type="text" id="alasanCuti" class="form-control" placeholder="Alasan cuti"  name="alasanCuti" >
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
                            <label class="col" for="fileSuratPengajuanMahasiswa">Unggah Surat Pengajuan Mahasiswa</label>
                            <div class="col">
                                <input type="file" id="fileSuratPengajuanMahasiswa" name="fileSuratPengajuanMahasiswa" class="form-control" placeholder=".pdf">
                            </div>
                        </div>

                        <!-- Surat Pengantar Departemen -->
                        <div class="form-group col">
                            <label class="col" for="fileSuratPengantarDept">Unggah Surat Pengantar Departemen</label>
                            <div class="col">
                                <input type="file" id="fileSuratPengantarDept" name="fileSuratPengantarDept" class="form-control" placeholder=".pdf">
                            </div>
                        </div>

                        <!-- Surat Dokter -->
                        <div class="form-group col">
                            <label class="col" for="fileSuratKeteranganDokter">Unggah Surat Keterangan Dokter</label>
                            <div class="col">
                                <input type="file" id="fileSuratKeteranganDokter" name="fileSuratKeteranganDokter" class="form-control" placeholder=".pdf">
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