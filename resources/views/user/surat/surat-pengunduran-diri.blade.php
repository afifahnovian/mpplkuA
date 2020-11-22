<!-- extends user-dashboar layout -->
@extends('layouts.usr-dashboard')
@section('page-name','Surat Pengunduran Diri') <!-- Page name in breadcrumb -->

@section('content')        
    <div class="card-box">
        <h4 class="header-title">Surat Pengunduran Diri</h4>
        <br>
        <div class="row">
            <div class="col">
                <form action="#" role="form" class="form-horizontal">
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
                                <label class="col" for="tanggalpengunduran">Tanggal Pengunduran</label>
                                <div class="col">
                                    <input class="form-control" id="tanggalpengunduran" type="date" name="tanggalpengunduran">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="col" >Tahun Akademik</label>
                                <div class="col">
                                    <input type="number" id="tahunakademikcuti" class="form-control" placeholder="Contoh : 2017">
                                </div>
                            </div>   
                        </div>
                            <div class="form-group col-md-6">
                                <label class="col" >Terakhir Aktif sbg Mahasiswa pada Tahun Akademik</label>
                                <div class="col">
                                    <input type="number" id="tahunterakhiraktif" class="form-control" placeholder="Contoh : 2017">
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
                            <label class="col" for="ktmfile">Unggah File KTM</label>
                            <div class="col">
                                <input type="file" id="ktmfile" class="form-control" placeholder=".jpg / .png">
                            </div>
                        </div>

                        <!-- Surat Pengantar Departemen -->
                        <div class="form-group col">
                            <label class="col" for="suratpengantardept">Unggah Surat Pengantar Departemen</label>
                            <div class="col">
                                <input type="file" id="suratpengantardept" class="form-control" placeholder=".pdf">
                            </div>
                        </div>

                        <!-- Surat Pengajuan Mahasiswa -->
                        <div class="form-group col">
                            <label class="col" for="suratpengajuanmhs">Unggah Surat Pengajuan Mahasiswa</label>
                            <div class="col">
                                <input type="file" id="suratpengajuanmhs" class="form-control" placeholder=".pdf">
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