<!-- extends user-dashboar layout -->
@extends('layouts.usr-dashboard')
@section('page-name','Legalisir Transkrip') <!-- Page name in breadcrumb -->

@section('content')        
    <div class="card-box">
        <h4 class="header-title">Legalisir Transkrip</h4>
        <br>
        <div class="row">
            <div class="col">
                <form role="form" class="form-horizontal" action="{{route('create-user-legalisir-transkrip')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <!-- Keperluan Pengajuan Surat -->
                    <div class="form-group col">
                        <label class="col" for="keperluan">Keperluan Pengajuan Surat</label>
                        <div class="col">
                            <input type="text" id="keperluan" class="form-control" name="keperluan" placeholder="Keperluan pengajuan surat">
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
                            <input type="file" id="fileKTM" name="fileKTM" accept="image/*"  class="form-control" placeholder=".jpg / .png">
                        </div>
                    </div>

                    <!-- Transkrip -->
                    <div class="form-group col">
                        <label class="col" for="fileTranskrip">Unggah Transkrip yang akan Dilegalisir</label>
                        <div class="col">
                            <input type="file" id="fileTranskrip" name="fileTranskrip" accept="application/pdf" class="form-control" placeholder=".pdf">
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