@extends('layouts.layoutadmin')

@section('content')
<div>
<li class="d-none d-sm-block">
                            <form class="app-search">
                                <div class="app-search-box">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit">
                                                <i class="fe-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </li>
</div>
<div class="mt-3">
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col"><h4>No</h4></th>
      <th scope="col"><h4>Nama</h4></th>
      <th scope="col"><h4>Surat</h4></th>
      <th scope="col"><h4>Status</h4></th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <th scope="row">1</th>
      <td>Jimmi Afriando Akbar</td>
      <td>Surat Keterangan Mahasiswa Aktif</td>
      <td><a href="{{route('admin-pengajuan')}}"> Masuk</a></td>
    </tr>
    
    <tr>
      <th scope="row">2</th>
      <td>Jimmi Afriando Akbar</td>
      <td>Surat Keterangan Mahasiswa Aktif</td>
      <td><a href="{{route('admin-dashboard')}}"> Masuk</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Jimmi Afriando Akbar</td>
      <td>Surat Keterangan Mahasiswa Aktif</td>
      <td><a href="{{route('admin-dashboard')}}"> Masuk</a></td>
    </tr>
  </tbody>
</table>
</div>
@endsection