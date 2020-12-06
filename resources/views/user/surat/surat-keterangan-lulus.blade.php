<!-- extends user-dashboar layout -->
@extends('layouts.usr-dashboard')
@section('page-name','Surat Keterangan Lulus') <!-- Page name in breadcrumb -->

@section('content')   
    <div class="card-box">
        <h4 class="header-title">Surat Keterangan Lulus</h4>
        <br>
        <div class="row">
            <div class="col">
                <form action="#" role="form" class="form-horizontal">
                    
                    <div>
                        <div class="form-group col">
                            <div class="col">
                                <h5 class="sub-header title" style="color:info">Alamat</h5>
                                <hr style="color:gray">
                            </div>
                        </div>
                        <!-- Alamat -->
                        <div class="form-group col">
                            <label class="col" for="alamatAsal">Alamat Asal</label>
                            <div class="col">
                                <input type="text" id="alamatAsal" name="alamatAsal" class="form-control" value="{{ old('alamatAsal') }}" placeholder="Alamat asal">
                            </div>
                        </div>

                        <div class="form-group col">
                            <label class="col" for="alamatBogor">Alamat di Bogor</label>
                            <div class="col">
                                <input type="text" id="alamatBogor" name="alamatBogor" class="form-control" value="{{ old('alamatBogor') }}" placeholder="Alamat di Bogor">
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
                    
                        <!-- Surat Pengantar Departemen -->
                        <div class="form-group col">
                            <label class="col" for="fileSuratPengantarDept">Unggah Surat Pengantar Departemen</label>
                            <div class="col">
                                <input type="file" id="fileSuratPengantarDept" name="fileSuratPengantarDept" class="form-control" value="{{ old('fileSuratPengantarDept') }}" placeholder=".pdf">
                            </div>
                        </div>

                        <!-- Lembar Pengesahan -->
                        <div class="form-group col">
                            <label class="col" for="fileLembarPengesahan">Unggah Lembar Pengesahan</label>
                            <div class="col">
                                <input type="file" id="fileLembarPengesahan" name="fileLembarPengesahan" class="form-control" value="{{ old('fileLembarPengesahan') }}" placeholder=".pdf">
                            </div>
                        </div>

                        <!-- File Transkrip -->
                        <div class="form-group col">
                            <label class="col" for="fileTranskrip">Unggah File Transkrip</label>
                            <div class="col">
                                <input type="file" id="fileTranskrip" name="fileTranskrip" class="form-control" value="{{ old('fileTranskrip') }}" placeholder=".pdf">
                            </div>
                        </div>

                        <!-- File Skripsi -->
                        <div class="form-group col">
                            <label class="col" for="fileSkripsi">Unggah File Skripsi</label>
                            <div class="col">
                                <input type="file" id="fileSkripsi" name="fileSkripsi" class="form-control" value="{{ old('fileSkripsi') }}" placeholder=".pdf">
                            </div>
                        </div>

                        <!-- Bukti Pembayaran SPP -->
                        <div class="form-group col">
                            <label class="col" for="fileBayarSPP">Unggah File Bukti Pembayaran SPP</label>
                            <div class="col">
                                <input type="file" id="fileBayarSPP" name="fileBayarSPP" class="form-control" value="{{ old('fileBayarSPP') }}" placeholder=".pdf">
                            </div>
                        </div>

                        <!-- Bukti Pembayaran Wisuda -->
                        <div class="form-group col">
                            <label class="col" for="fileBuktiBayarWisuda">Unggah File Bukti Pembayaran Wisuda</label>
                            <div class="col">
                                <input type="file" id="fileBuktiBayarWisuda" name="fileBuktiBayarWisuda" class="form-control" value="{{ old('fileBuktiBayarWisuda') }}" placeholder=".pdf">
                            </div>
                        </div>

                        <!-- Foto -->
                        <div class="form-group col">
                            <label class="col" for="fileFoto">Unggah Pas Foto</label>
                            <div class="col">
                                <input type="file" id="fileFoto" name="fileFoto" class="form-control" value="{{ old('fileFoto') }}" placeholder=".jpg / .png">
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