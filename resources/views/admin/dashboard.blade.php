<!-- extends user-dashboar layout -->
@extends('layouts.layoutadmin')

@section('content')

<div class="mx-auto" style="width: 1050px;">
  <div class="card-deck" >
    
    <a href="{{route('admin-masuk')}}">
    <div class="mb-3" >
    <div class="card">
    <table class="table table-hover">
    <tbody type="submit">
    <tr>
      <th scope="row"> <img src="/highdamin/dark/assets/images/icons/data_protection.svg" alt="" width="100%" class="img-responsive logo"></th>
      <td> 
          <h4 class="card-title">Surat Masuk</h4> 
          <h0><p class="card-text">3</p></h0>
      </td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    </a>
  
    <a href="{{route('admin-diproses')}}">
    <div class="mb-3">
    <div class="card">
    <table class="table table-hover">
    <tbody>
    <tr>
    <th scope="row"> <img src="/highdamin/dark/assets/images/icons/data_backup.svg" alt="" width="100%" class="img-responsive logo"></th>
      <td> 
          <h4 class="card-title">Surat Diproses</h4> 
          <h0><p class="card-text">3</p></h0>
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    </a>

    <a href="{{route('admin-selesai')}}">
    <div class="mb-3">
    <div class="card">
    <table class="table table-hover">
    <tbody>
    <tr>
    <th scope="row"> <img src="/highdamin/dark/assets/images/icons/accept_database.svg" alt="" width="100%" class="img-responsive logo"></th>
      <td> 
          <h4 class="card-title">Surat Selesai</h4> 
          <h0><p class="card-text">3</p></h0>
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
</div>
</div>
</a>

    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col"><h4>Surat</h4></th>
      <th scope="col"><h4>Tanggal</h4></th>
      <th scope="col"><h4>Status</h4></th>
      <th scope="col"><h4>Tindakan</h4></th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <th scope="row">Surat Keterangan Mahasiswa Aktif</th>
      <td>May 26, 2019</td>
      <td><span class="badge label-table badge-danger">Ditolak</span></td>
      <td><a href="{{route('admin-suratketeranganaktif')}}"> DETAIL</a></td>
    </tr>
    
    <tr>
    <th scope="row">Surat Keterangan Mahasiswa Aktif</th>
      <td>May 26, 2019</td>
      <td><span class="badge label-table badge-warning">Diproses</span></td>
      <td><a href="{{route('admin-suratketeranganaktif')}}"> DETAIL</a></td>
    </tr>

    <tr>
    <th scope="row">Surat Keterangan Mahasiswa Aktif</th>
      <td>May 26, 2019</td>
      <td><span class="badge label-table badge-success">Selesai</span></td>
      <td><a href="{{route('admin-suratketeranganaktif')}}"> DETAIL</a></td>
    </tr>

    <tr>
    <th scope="row">Surat Keterangan Mahasiswa Aktif</th>
      <td>May 26, 2019</td>
      <td><span class="badge label-table badge-info">Pending</span></td>
      <td><a href="{{route('admin-suratketeranganaktif')}}"> DETAIL</a></td>
    </tr>

  </tbody>
</table>

@endsection