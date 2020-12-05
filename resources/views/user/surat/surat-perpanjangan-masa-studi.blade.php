<!-- extends user-dashboar layout -->
@extends('layouts.usr-dashboard')
@section('page-name','Surat Perpanjangan Masa Studi') <!-- Page name in breadcrumb -->

@section('content')        
    <div class="card-box">
        <h4 class="header-title">Surat Perpanjangan Masa Studi</h4>
        <br>
        <div class="row">
            <div class="col">
                <form action="#" role="form" class="form-horizontal">
                    <!-- Waktu Perpanjangan Masa Studi -->
                    <div>
                        <div class="form-group col">
                            <div class="col">
                                <h5 class="sub-header title" style="color:info">Waktu Akhir Perpanjangan Masa Studi</h5>
                                <hr style="color:gray">
                            </div>
                        </div>
                        <div class="form-row col">
                            <div class="form-group col-md-6">
                                <label class="col" for="waktuAkhirPerpanjangan">Tanggal Akhir Perpanjangan</label>
                                <div class="col">
                                    <input class="form-control" id="waktuAkhirPerpanjangan" type="date" name="waktuAkhirPerpanjangan" value="{{ old('waktuAkhirPerpanjangan') }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="col" for="waktuAkhirPerpanjangan_Tahun">Tahun Akademik</label>
                                <div class="col">
                                    <input type="number" id="waktuAkhirPerpanjangan_Tahun" name="waktuAkhirPerpanjangan_Tahun" class="form-control" value="{{ old('waktuAkhirPerpanjangan_Tahun') }}" placeholder="Contoh : 2017">
                                </div>
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

                        <!-- Tabel Rencana Studi -->
                        <div class="form-group col">
                            <label class="col" for="fileTabelRencanaStudi">Tabel Rencana Studi</label>
                            <div class="col">
                                <input type="file" id="fileTabelRencanaStudi" class="form-control" value="{{ old('fileTabelRencanaStudi') }}" placeholder=".jpg / .png">
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