<!-- extends user-dashboar layout -->
@extends('layouts.usr-dashboard')
@section('page-name','Surat Pengunduran Diri') <!-- Page name in breadcrumb -->

@section('content')        
    <div class="card-box">
        <h4 class="header-title">Surat Pengunduran Diri</h4>
        <br>
        <div class="row">
            <div class="col">
                <form action="user-surat-pengunduran-diri" role="form" class="form-horizontal">
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
                                    <input class="form-control" id="tanggalPengunduran" type="date"  name="tanggalPengunduran" value="{{ old('tanggalPengunduran') }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="col" >Tahun Akademik</label>
                                <div class="col">
                                    <input type="number" id="tahunAkademikPengunduran" class="form-control" placeholder="Contoh : 2017" value="{{ old('tahunAkademikPengunduran') }}">
                                </div>
                            </div>   
                        </div>
                            <div class="form-group col-md-6">
                                <label class="col" >Terakhir Aktif sbg Mahasiswa pada Tahun Akademik</label>
                                <div class="col">
                                    <input type="number" id="tahunTerakhirAktif" class="form-control" placeholder="Contoh : 2017" value="{{ old('tahunTerakhirAktif') }}">
                                </div>
                            </div>
                    </div>
                    
                    <!-- File yang dibutuhkan -->
                    <br>
                    <div>
                        <div class="form-group col">
                            <div class="col">
                                <h5 class="sub-header title" style="color:info">File yang dibutuhkan</h5>
                                <hr style="color:gray">
                            </div>
                        </div>
                        <!-- KTM -->
                        <div class="form-group col">
                            <label class="col" for="fileKTM">Unggah File KTM</label>
                            <div class="col">
                                <input type="file" id="fileKTM" class="form-control" placeholder=".jpg / .png" value="{{ old('fileKTM') }}">
                            </div>
                        </div>

                        <!-- Surat Pengantar Departemen -->
                        <div class="form-group col">
                            <label class="col" for="fileSuratPengantarDept">Unggah Surat Pengantar Departemen</label>
                            <div class="col">
                                <input type="file" id="fileSuratPengantarDept" class="form-control" placeholder=".pdf" value="{{ old('fileSuratPengantarDept') }}">
                            </div>
                        </div>

                        <!-- Surat Pengajuan Mahasiswa -->
                        <div class="form-group col">
                            <label class="col" for="fileSuratPengajuanMahasiswa">Unggah Surat Pengajuan Mahasiswa</label>
                            <div class="col">
                                <input type="file" id="fileSuratPengajuanMahasiswa" class="form-control" placeholder=".pdf" value="{{ old('fileSuratPengajuanMahasiswa') }}">
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