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
                            <label class="col" for="alamatasal">Alamat Asal</label>
                            <div class="col">
                                <input type="text" id="alamatasal" class="form-control" placeholder="Alamat asal">
                            </div>
                        </div>

                        <div class="form-group col">
                            <label class="col" for="alamatbogor">Alamat di Bogor</label>
                            <div class="col">
                                <input type="text" id="alamatbogor" class="form-control" placeholder="Alamat di bogor">
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
                    
                        <!-- Surat Pengantar Departemen -->
                        <div class="form-group col">
                            <label class="col" for="suratpengantardept">Surat Pengantar Departemen</label>
                            <div class="col">
                                <input type="file" id="suratpengantardept" class="form-control" placeholder=".pdf">
                            </div>
                        </div>
                        <!-- Lembar Pengesahan -->
                        <div class="form-group col">
                            <label class="col" for="lembarpengesahan">Lembar Pengesahan</label>
                            <div class="col">
                                <input type="file" id="lembarpengesahan" class="form-control" placeholder=".pdf">
                            </div>
                        </div>
                        <!-- File Transkrip -->
                        <div class="form-group col">
                            <label class="col" for="filetranskrip">File Transkrip</label>
                            <div class="col">
                                <input type="file" id="filetranskrip" class="form-control" placeholder=".pdf">
                            </div>
                        </div>
                        <!-- File Skripsi -->
                        <div class="form-group col">
                            <label class="col" for="fileskripsi">File Skripsi</label>
                            <div class="col">
                                <input type="file" id="fileskripsi" class="form-control" placeholder=".pdf">
                            </div>
                        </div>
                        <!-- Bukti Pembayaran SPP -->
                        <div class="form-group col">
                            <label class="col" for="buktispp">File Bukti Pembayaran SPP</label>
                            <div class="col">
                                <input type="file" id="buktispp" class="form-control" placeholder=".pdf">
                            </div>
                        </div>
                        <!-- Bukti Pembayaran Wisuda -->
                        <div class="form-group col">
                            <label class="col" for="buktibayarwisuda">File Bukti Pembayaran Wisuda</label>
                            <div class="col">
                                <input type="file" id="buktibayarwisuda" class="form-control" placeholder=".pdf">
                            </div>
                        </div>
                        <!-- Foto -->
                        <div class="form-group col">
                            <label class="col" for="foto">Pas Foto</label>
                            <div class="col">
                                <input type="file" id="foto" class="form-control" placeholder=".jpg / .png">
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