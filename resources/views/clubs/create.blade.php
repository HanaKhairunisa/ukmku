@extends('layout/main')


@section('title', 'Form Tambah Anggota UKM')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-8">
      <center><h2 class="mt-3"> Form Tambah Anggota UKM </h2></center>
       
       <form method="POST" action="/clubs">
        @csrf

      <div class="form-group">
        <label for="nik">NIK</label>
        <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="Masukkan ID UKM Anda" name="nik" value="{{old('nik')}}">
        @error('nik')
        <div class="invalid-feedback">{{ $message}}</div>
        @enderror
      </div>
        
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama UKM Anda" name="nama" value="{{old('nama')}}">
        @error('nama')
        <div class="invalid-feedback">{{ $message}}</div>
        @enderror
      </div>

    <div class="form-group">
        <label for="email">email Lengkap</label>
        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email Anda" name="email"value="{{old('email')}}">
         @error('email')
        <div class="invalid-feedback">{{ $message}}</div>
        @enderror
      </div>

    <div class="form-group">
        <label for="no_tlp">No Handphone</label>
        <input type="text" class="form-control @error('no_tlp') is-invalid @enderror" id="no_tlp" placeholder="Masukkan No Handphone" name="no_tlp" value="{{old('no_tlp')}}">
        @error('no_tlp')
        <div class="invalid-feedback">{{ $message}}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="email" placeholder="Masukkan Gambar" name="alamat">
        @error('alamat')
        <div class="invalid-feedback">{{ $message}}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="tanggal_lahir">tanggal_lahir</label>
        <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="email" placeholder="Masukkan Gambar" name="tanggal_lahir">
        @error('tanggal_lahir')
        <div class="invalid-feedback">{{ $message}}</div>
        @enderror
      </div>
      <div class="form-group ">
     <label for="jenis_kelamin">Jenis Kelamin </label>
     
          <input type="radio" class="@error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" value="L" value="{{old('jenis_kelamin')}}" >L
          <input type="radio" class="@error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" value="P" value="{{old('jenis_kelamin')}}" >P
          @error('jenis_kelamin')
        <div class="invalid-feedback">{{ $message}}</div>
        @enderror
      
      </div>
      <div class="form-group">
        <label for="foto">Foto</label>
        <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" placeholder="Masukkan Gambar" name="foto">
        @error('foto')
        <div class="invalid-feedback">{{ $message}}</div>
        @enderror
      </div>


<button type="submit" class="btn btn-primary">Tambah Data</button>
</form>
     
     </div>
   </div>
 </div>

   @endsection