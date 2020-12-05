<!-- extends user-dashboar layout -->
@extends('layouts.usr-dashboard')
@section('page-name','Surat Keterangan Mahasiswa Aktif') <!-- Page name in breadcrumb -->

@section('content')        
    <div class="card-box">
        <h4 class="header-title">Surat Keterangan Mahasiswa Aktif</h4>
        <br>
        <div class="row">
            <div class="col">
                <form action="{{route('user-surat-keterangan-aktif')}}" method="POST" role="form" class="form-horizontal">
                    {{ csrf_field() }}
                    <!-- Keperluan Pengajuan Surat -->
                    <div class="form-group col">
                        <label class="col" for="keperluan">Keperluan Pengajuan Surat</label>
                        <div class="col">
                            <input type="text" id="keperluan" name="keperluan" class="form-control" value="{{ old('keperluan') }}" placeholder="Keperluan pengajuan surat">
                        </div>
                    </div>

                    <!-- File yang dibutuhkan -->
                    <br>
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
                            <input type="file" id="fileKTM" name="fileKTM" class="form-control" value="{{ old('fileKTM') }}" placeholder=".jpg / .png">
                        </div>
                    </div>

                    <!-- Transkrip -->
                    <div class="form-group col">
                        <label class="col" for="fileBayarSPP">Unggah Bukti Pembayaran SPP</label>
                        <div class="col">
                            <input type="file" id="fileBayarSPP" name="fileBayarSPP" class="form-control" value="{{ old('fileBayarSPP') }}" placeholder=".jpg /.png /.pdf">
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