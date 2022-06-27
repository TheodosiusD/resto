
@extends('layouts.app')
@section('content')
<br>
<div class="row">
  <div class="col-2">
  <a type="submit" class="btn btn-primary" href="/tambahmanager" style="margin-left: 30px;">Tambah Menu</a>

</div>
  <div class="col-10">
  <div style="width: 1000px; height: 700px;">
  <table class="table text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama Menu</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Ketersediaan</th>
                        <th>Action</th>
                    </tr>  
                    @foreach($menu as $t)
		<tr>
      <td>{{$loop->iteration}}</td>
			<td>{{ $t->menu_manager}}</td>
			<td>{{ $t->deskripsi}}</td>
			<td>{{ $t->harga_manager}}</td>
      <td>{{ $t->ketersediaan}}</td>
      <td><form action="{{ route('manager.destroy',$t->id) }}" method="POST">
           
                    <a class="btn btn-primary" href="{{ route('manager.edit',$t->id) }}">Edit</a>
     
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