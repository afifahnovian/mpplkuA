<!-- extends user-dashboar layout -->
@extends('layouts.usr-dashboard')
@section('page-name','Surat Keterangan Aktif') <!-- Page name in breadcrumb -->

@section('content')        
    <div class="card-box">
        <h4 class="header-title">Surat Keterangan Aktif</h4>
        <br>
        <div class="row">
            <div class="col">
                <form action="#" role="form" class="form-horizontal">
                    <!-- Keperluan Pengajuan Surat -->
                    <div class="form-group col">
                        <label class="col" for="keperluan">Keperluan Pengajuan Surat</label>
                        <div class="col">
                            <input type="text" id="keperluan" class="form-control" placeholder="Keperluan pengajuan surat">
                        </div>
                    </div>
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

                    <!-- Transkrip -->
                    <div class="form-group col">
                        <label class="col" for="buktispp">Unggah Pembayaran SPP</label>
                        <div class="col">
                            <input type="file" id="buktispp" class="form-control" placeholder=".jpg /.png /.pdf">
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