<!DOCTYPE html>
<html lang="en">
<head>
  @section('content')
  <center>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<form>">
  
    <title>Document</title>
</head>
<body>
<form action="/tambahtransaksi" method="POST">
  @csrf
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputNama"></label>
      <input type="text" name="nama" class="form-control" id="inputNama" placeholder="Nama Pelanggan">
    </div>
    <div class="form-group col-md-6">
      <label for="inputMenu"></label>
      <input type="text" name="menu" class="form-control" id="inputMenu" placeholder="Nama Menu">
    </div>
    <div class="form-group col-md-6">
      <label for="inputMenu"></label>
      <input type="text" name="jumlah" class="form-control" id="inputMenu" placeholder="Jumlah">
    </div>
  </div>
  <div class="form-group col-md-6">
    <label for="inputTotalharga"></label>
    <input type="text" name="total" class="form-control" id="inputTotalharga" placeholder="Total Harga">
  </div>
  <div class="form-group col-md-6">
    <label for="inputPegawai"></label>
    <input type="text" name="nama_pegawai" class="form-control" id="inputPegawai" placeholder="Nama Pegawai">
  </div>

<br>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Tambahkan</button>
</form>
    @extends('layouts.app')
    @endsection
</body>
</html>