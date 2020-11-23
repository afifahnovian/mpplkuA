@extends('layouts.layoutadmin')

@section('content')
<h3>PENGATURAN ADMIN</h3>
<br>
Email Admin
        <input style="max-width: 25rem;" type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="Masukan email admin yang ingin ditambahkkan">
               <br>
               <label for="exampleDropdownFormPassword2">
               <div class="pt-3">Kata Sandi</div>
               </label>
        <input style="max-width: 25rem;" type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Masukan kata sandi">
       <div class="mt-2">
        <a href="#"> 
        <button style="max-width: 10rem;" type="submit" class="btn btn-dark btn-block">TAMBAHKAN</button>
    </a>
    </div>

@endsection