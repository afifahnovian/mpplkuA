<!-- extends user-dashboar layout -->
@extends('layouts.layoutadmin')

@section('content')

<div class="card-deck">
    <div class="card">
    <table class="table table-hover">
    <tbody>
    <tr>
      <th scope="row"> <img src="/highdamin/dark/assets/images/icons/data_protection.svg" alt="" width="80%" class="img-responsive logo"></th>
      <td> 
          <h4 class="card-title">Surat Masuk</h4> 
          <h0><p class="card-text">3</p></h0>
      </td>
    </tr>
    </tbody>
    </table>
    </div>

    <div class="card">
    <table class="table table-hover">
    <tbody>
    <tr>
    <th scope="row"> <img src="/highdamin/dark/assets/images/icons/data_backup.svg" alt="" width="80%" class="img-responsive logo"></th>
      <td> 
          <h4 class="card-title">Surat Diproses</h4> 
          <h0><p class="card-text">3</p></h0>
    </td>
    </tr>
    </tbody>
    </table>
    </div>

    <div class="card">
    <table class="table table-hover">
    <tbody>
    <tr>
    <th scope="row"> <img src="/highdamin/dark/assets/images/icons/accept_database.svg" alt="" width="80%" class="img-responsive logo"></th>
      <td> 
          <h4 class="card-title">Surat Selesai</h4> 
          <h0><p class="card-text">3</p></h0>
    </td>
    </tr>
    </tbody>
    </table>
    </div>

@endsection