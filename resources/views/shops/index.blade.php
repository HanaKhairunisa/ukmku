@extends('layout/main')
@section('title', 'Daftar UKM')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-50">
       <h2 class="mt-3"> DAFTAR TOKO UKM </h2>
      
       <ul class="list-group-item list-group-item-action list-group-item-dark">
  <a href="/shops/create" class="btn btn-dark my-3"> Tambah Data Anggota</a></ul>
      <table class="table">
  			<thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID UKM</th>
      <th scope="col">Nama UKM</th>
      <th scope="col">Tampilan</th>
      <th scope="col">Action</th>
    </tr>

  </thead>
   
   @foreach( $shops as $shop) 
  
  <tbody>
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{ $shop->id_ukm }}</td>
      <td>{{ $shop->nama_ukm }}</td>
      <td><img src="{{ asset('images/' . $shop->tampilan) }}"width="100" height="80"></td>
  	  <td>
       <form action="/shops/{{ $shop->id }}" method="POST" class="d-inline">
       

       @method('delete')
       @csrf
     
  <button type="submit" class="btn btn-outline-danger">Delete</button></form>    
  <a href="/shops/{{ $shop->id }}" class="btn btn-outline-success">Detail</a>
  </div>
  	     </tr>
@endforeach    

  </tbody>

</table>

      @if (session('status'))
          <div class="alert alert-info">
              {{ session('status') }}
          </div>
      @endif
@endsection

  
 