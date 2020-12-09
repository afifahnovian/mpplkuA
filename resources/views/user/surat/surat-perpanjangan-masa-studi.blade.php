<!-- extends user-dashboar layout -->
@extends('layouts.usr-dashboard')
@section('page-name','Surat Perpanjangan Masa Studi') <!-- Page name in breadcrumb -->

@section('content')        
    <div class="card-box">
        @if (session()->has('success'))
            <div class="alert alert-dismissible alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h4 class="header-title">Surat Perpanjangan Masa Studi</h4>
        <br>
        <div class="row">
            <div class="col">
                <form action="{{route('create-user-surat-perpanjangan-masa-studi')}}" method="POST" enctype="multipart/form-data" role="form" class="form-horizontal">
                    {{ csrf_field() }}
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
                                    <input class="form-control" id="waktuAkhirPerpanjangan" type="date" name="waktuAkhirPerpanjangan" placeholder="Contoh : 1 September">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="col" for="waktuAkhirPerpanjangan_TahunAkademik">Tahun Akademik</label>
                                <div class="col">
                                    <input type="number" id="waktuAkhirPerpanjangan_TahunAkademik" name="waktuAkhirPerpanjangan_TahunAkademik" class="form-control" placeholder="Contoh : 2017">
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
                                <input type="file" id="fileTabelRencanaStudi" name="fileTabelRencanaStudi" class="form-control" placeholder=".jpg / .png">
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