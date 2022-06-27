@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <center>


    <title>Document</title>
  </head>
  <body>
  <form action="{{route('tambah-manager')}}" id="form-post" method="post">
          @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputMenu"></label>
              <input type="text" name="nama_menu_manager" class="form-control" id="inputMenu" placeholder="Nama Menu">
            </div>
            <div class="form-group col-md-6">
              <label for="inputDeskripsi"></label>
              <input type="text" name="deskripsi" class="form-control" id="inputDeskripsi" placeholder="Deskripsi Menu">
            </div>
          </div>
          <div class="form-group col-md-6">
            <label for="inputHarga"></label>
            <input type="text"  name="harga_manager" class="form-control" id="inputHarga" placeholder="Harga Menu">
          </div>
          <div class="form-group col-md-6">
            <label for="inputKetersediaan"></label>
            <input type="text" name="ketersediaan" class="form-control" id="inputKetersediaan" placeholder="Ketersediaan">
            <br>
          </div>
        </div>
        <button class="btn btn-primary">Tambahkan</button>
        </form>
    </body>
  </center>
@endsection
</html>