@extends('layouts.app')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('transaksi.index') }}"> Back</a>
        </div>
    </div>
</div>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     
<form action="{{ route('transaksi.update',$transaksi->id) }}" method="POST" enctype="multipart/form-data"> 
    @csrf

    @method('PUT')
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Pelanggan:</strong>
                <input type="text" name="menu_pelanggan" class="form-control" placeholder="Nama Menu" value="{{$transaksi->nama_pelanggan}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi :</strong>
                <input type="text" name="nama_menu" class="form-control" placeholder="Deskripsi" value="{{$transaksi->nama_menu}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga :</strong>
                <input type="text" name="jumlah" class="form-control" placeholder="Harga" value="{{$transaksi->jumlah}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total Harga :</strong>
                <input type="text" name="total_harga" class="form-control" placeholder="Total Harga" value="{{$transaksi->total_harga}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Pegawai :</strong>
                <input type="text" name="nama_pegawai" class="form-control" placeholder="Nama Pegawai" value="{{$transaksi->nama_pegawai}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
</form>
@endsection