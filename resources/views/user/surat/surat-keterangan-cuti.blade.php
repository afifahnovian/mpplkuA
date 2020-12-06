<!-- extends user-dashboar layout -->
@extends('layouts.usr-dashboard')
@section('page-name','Surat Keterangan Cuti') <!-- Page name in breadcrumb -->

@section('content')        
    <div class="card-box">
        <h4 class="header-title">Surat Keterangan Cuti</h4>
        <br>
        <div class="row">
            <div class="col">
                <form action="#" role="form" class="form-horizontal">
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
                                <label class="col" >Tahun Akademik</label>
                                <div class="col">
                                    <input type="number" id="waktuCuti_TahunAkademik"  name="waktuCuti_TahunAkademik" value="{{ old('waktuCuti_TahunAkademik') }}" class="form-control" placeholder="Contoh : 2017">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="col">Semester</label>
                                <div class="col">
                                    <select class="form-control">
                                        <option>Ganjil</option>
                                        <option>Genap</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col">
                            <label class="col" for="alasanCuti">Alasan Cuti</label>
                            <div class="col">
                                <input type="text" id="alasanCuti" class="form-control" placeholder="Alasan cuti"  name="alasanCuti" value="{{ old('alasanCuti') }}" >
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
                            <label class="col" for="suratpengajuanmhs">Unggah Surat Pengajuan Mahasiswa</label>
                            <div class="col">
                                <input type="file" id="suratpengajuanmhs" class="form-control" placeholder=".pdf">
                            </div>
                        </div>

                        <!-- Surat Pengantar Departemen -->
                        <div class="form-group col">
                            <label class="col" for="suratpengantardept">Unggah Surat Pengantar Departemen</label>
                            <div class="col">
                                <input type="file" id="suratpengantardept" class="form-control" placeholder=".pdf">
                            </div>
                        </div>

                        <!-- Surat Dokter -->
                        <div class="form-group col">
                            <label class="col" for="suratdokter">Unggah Surat Keterangan Dokter</label>
                            <div class="col">
                                <input type="file" id="suratdokter" class="form-control" placeholder=".pdf">
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