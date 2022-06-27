
@extends('layouts.app')
 @section('content')
 <br>
<div class="row">
  <div class="col-2">
  <a type="submit" class="btn btn-primary" href="/tambahkasir" style="margin-left: 30px;">Tambah Pesanan</a></div>
  <div class="col-10">
  <div style="width: 1000px; height: 700px;">
  <table class="table text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama Pelanggan</th>
                        <th>Nama Menu</th>
                        <th>Jumlah</th>
                        <th>Total Harga</th>
                        <th>Nama Pegawai</th>
                        <th>Action</th>
                    </tr> 
                    @foreach($transaksi as $p)
		<tr>
        <td>{{$loop->iteration}}</td>
			<td>{{ $p->nama_pelanggan }}</td>
			<td>{{ $p->nama_menu }}</td>
			<td>{{ $p->jumlah }}</td>
			<td>{{ $p->total_harga }}</td>
      <td>{{ $p->nama_pegawai}}</td>
      <td><form action="{{ route('transaksi.destroy',$p->id) }}" method="POST">
           
                    <a class="btn btn-primary" href="{{ route('transaksi.edit',$p->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                </td>
		</tr>
		@endforeach
  </div>
 
</div>

 @endsection