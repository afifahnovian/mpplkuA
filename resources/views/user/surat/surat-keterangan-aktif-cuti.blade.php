<!-- extends user-dashboar layout -->
@extends('layouts.usr-dashboard')
@section('page-name','Surat Keterangan Aktif Setelah Cuti') <!-- Page name in breadcrumb -->

@section('content')        
    <div class="card-box">
        <h4 class="header-title">Surat Keterangan Aktif Setelah Cuti</h4>
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
                                    <input type="number" id="waktuCuti_TahunAkademik" name="waktuCuti_TahunAkademik" value="{{ old('waktuCuti_TahunAkademik') }}" class="form-control" placeholder="Contoh : 2017">
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
                                <input type="text" id="alasanCuti" class="form-control" placeholder="Alasan cuti.." name="alasanCuti" value="{{ old('alasanCuti') }}" >
                            </div>
                        </div>
                    </div>
                    <!-- Waktu Aktif Setelah Cuti -->
                    <br>
                    <div>
                        <div class="form-group col">
                            <div class="col">
                                <h5 class="sub-header title" style="color:info">Waktu Aktif Setelah Cuti</h5>
                                <hr style="color:gray">
                            </div>
                        </div>
                        <div class="form-row col">
                            <div class="form-group col-md-6">
                                <label class="col" >Tahun Akademik</label>
                                <div class="col">
                                    <input type="number" id="waktuAktif_TahunAkademik" class="form-control" placeholder="Contoh : 2017" name="waktuAktif_TahunAkademik" value="{{ old('waktuAktif_TahunAkademik') }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="col">Semester</label>
                                <div class="col">
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                </div>
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

                        <!-- Surat Cuti -->
                        <div class="form-group col">
                            <label class="col" for="suratcuti">Unggah Surat Cuti</label>
                            <div class="col">
                                <input type="file" id="suratcuti" class="form-control" placeholder=".pdf" name="waktuAktif_TahunAkademik" value="{{ old('waktuAktif_TahunAkademik') }}">
                            </div>
                        </div>

                        <!-- Surat Pengantar Departemen -->
                        <div class="form-group col">
                            <label class="col" for="filePengantarDept">Unggah Surat Pengantar Departemen</label>
                            <div class="col">
                                <input type="file" id="filePengantarDept" class="form-control" placeholder=".pdf" name="filePengantarDept" value="{{ old('filePengantarDept') }}">
                            </div>
                        </div>

                        <!-- Bukti Pembayaran SPP -->
                        <div class="form-group col">
                            <label class="col" for="fileSuratCuti">Unggah Bukti Pembayaran SPP</label>
                            <div class="col">
                                <input type="file" id="fileSuratCuti" class="form-control" placeholder=".pdf" name="fileSuratCuti" value="{{ old('fileSuratCuti') }}" >
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