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
                                    <input type="number" id="tahunakademikcuti" class="form-control" placeholder="Contoh : 2017">
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
                            <label class="col" for="alasancuti">Alasan Cuti</label>
                            <div class="col">
                                <input type="text" id="alasancuti" class="form-control" placeholder="Alasan cuti..">
                            </div>
                        </div>
                    </div>
                    
                    <!-- File yang dibutuhkan -->
                    <div>
                        <div class="form-group col">
                            <div class="col">
                                <h5 class="sub-header title" style="color:info">File yang dibutuhkan</h5>
                                <hr style="color:gray">
                            </div>
                        </div>
                        <!-- KTM -->
                        <div class="form-group col">
                            <label class="col" for="suratpengajuanmhs">Surat Pengajuan Mahasiswa</label>
                            <div class="col">
                                <input type="file" id="suratpengajuanmhs" class="form-control" placeholder=".pdf">
                            </div>
                        </div>

                        <!-- Surat Pengantar Departemen -->
                        <div class="form-group col">
                            <label class="col" for="suratpengantardept">Surat Pengantar Departemen</label>
                            <div class="col">
                                <input type="file" id="suratpengantardept" class="form-control" placeholder=".pdf">
                            </div>
                        </div>
                        <!-- Surat Dokter -->
                        <div class="form-group col">
                            <label class="col" for="suratdokter">Surat Keterangan Dokter</label>
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