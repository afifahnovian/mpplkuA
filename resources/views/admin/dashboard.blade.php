<!-- extends user-dashboar layout -->
@extends('layouts.layoutadmin')

@section('content')


  <div class="row">
    <div class="col-sm-4">
    <a href="{{route('admin-masuk')}}">
              <div class="mb-3" >
                <div class="card">
                   <table class="table table-hover">
                   <tr>
                <th scope="row">
                    <img src="/highdamin/dark/assets/images/icons/data_protection.svg" alt="" width="100%" class="img-responsive logo">
                </th>
                <td> 
                    <h3 class="card-title">Surat Masuk</h3> 
                    <h0><p class="card-text">20</p></h0>
                </td>
                  </tr>
                    </table>
                </div>
              </div>
            </a>
    </div>
    <div class="col-sm-4">
    <a href="{{route('admin-diproses')}}">
              <div class="mb-3" >
                <div class="card">
                   <table class="table table-hover">
                   <tr>
                <th scope="row">
                    <img src="/highdamin/dark/assets/images/icons/data_backup.svg" alt="" width="104%" class="img-responsive logo">
                </th>
                <td> 
                    <h3 class="card-title">Surat Diproes</h3> 
                    <h0><p class="card-text">20</p></h0>
                </td>
                  </tr>
                    </table>
                </div>
              </div>
            </a>
    </div>
    <div class="col-sm-4">
    <a href="{{route('admin-selesai')}}">
              <div class="mb-3" >
                <div class="card">
                   <table class="table table-hover">
                   <tr>
                <th scope="row">
                    <img src="/highdamin/dark/assets/images/icons/accept_database.svg" alt="" width="102%" class="img-responsive logo">
                </th>
                <td> 
                    <h3 class="card-title">Surat Selesai</h3> 
                    <h0><p class="card-text">20</p></h0>
                </td>
                  </tr>
                    </table>
                </div>
              </div>
            </a>
    </div>
  </div>

                <div class="mb-3">
                  <div class="row">
                    <div class="col-12 text-sm-center form-inline">
                      <div class="form-group mr-2">
                        <select id="demo-foo-filter-status" class="custom-select">
                          <option value="">Tampilkan Semua</option>
                          <option value="Selesai">Selesai</option>
                          <option value="Ditolak">Ditolak</option>
                          <option value="Diproses">Diproses</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <input id="demo-foo-search" type="text" placeholder="Cari Surat" class="form-control" autocomplete="on">
                            <button class="btn" type="submit">
                                <i class="fe-search"></i>
                            </button>
                      </div>
                    </div>
                  </div>
                </div>
                
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
      <td><a href="#"> DETAIL</a></td>
    </tr>
    
    <tr>
    <th scope="row">Surat Keterangan Mahasiswa Aktif</th>
      <td>May 26, 2019</td>
      <td><span class="badge label-table badge-warning">Diproses</span></td>
      <td><a href="#"> DETAIL</a></td>
    </tr>

    <tr>
    <th scope="row">Surat Keterangan Mahasiswa Aktif</th>
      <td>May 26, 2019</td>
      <td><span class="badge label-table badge-success">Selesai</span></td>
      <td><a href="#"> DETAIL</a></td>
    </tr>

    <tr>
    <th scope="row">Surat Keterangan Mahasiswa Aktif</th>
      <td>May 26, 2019</td>
      <td><span class="badge label-table badge-info">Pending</span></td>
      <td><a href="#"> DETAIL</a></td>
    </tr>

  </tbody>
</table>

@endsection