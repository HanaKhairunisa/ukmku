@extends('layout/main')


@section('title', 'Form Tambah Data Toko UKM')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-8">
      <center><h2 class="mt-3"> Form Tambah Data Toko UKM </h2></center>
       
       <form method="POST" action="/shops">
        @csrf

      <div class="form-group">
        <label for="id_ukm">ID UKM</label>
        <input type="text" class="form-control @error('id_ukm') is-invalid @enderror" id="id_ukm" placeholder="Masukkan ID UKM Anda" name="id_ukm" value="{{old('id_ukm')}}">
        @error('id_ukm')
        <div class="invalid-feedback">{{ $message}}</div>
        @enderror
      </div>
        
      <div class="form-group">
        <label for="nama_ukm">Nama UKM</label>
        <input type="text" class="form-control @error('nama_ukm') is-invalid @enderror" id="nama_ukm" placeholder="Masukkan Nama UKM Anda" name="nama_ukm" value="{{old('nama_ukm')}}">
        @error('nama_ukm')
        <div class="invalid-feedback">{{ $message}}</div>
        @enderror
      </div>

    <div class="form-group">
        <label for="alamat">Alamat Lengkap</label>
        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan Alamat Anda" name="alamat"value="{{old('alamat')}}">
         @error('alamat')
        <div class="invalid-feedback">{{ $message}}</div>
        @enderror
      </div>

    <div class="form-group">
        <label for="no_handphone">No Handphone</label>
        <input type="text" class="form-control @error('no_handphone') is-invalid @enderror" id="no_handphone" placeholder="Masukkan No Handphone" name="no_handphone" value="{{old('no_handphone')}}">
        @error('no_handphone')
        <div class="invalid-feedback">{{ $message}}</div>
        @enderror
      </div>

      <div class="form-group">
        <label for="Tampilan">Gambar UKM</label>
        <input type="file" class="form-control @error('tampilan') is-invalid @enderror" id="email" placeholder="Masukkan Gambar" name="tampilan">
        @error('tampilan')
        <div class="invalid-feedback">{{ $message}}</div>
        @enderror
      </div>


<button type="submit" class="btn btn-primary">Tambah Data</button>
</form>
     
     </div>
   </div>
 </div>

   @endsection