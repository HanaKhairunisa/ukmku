@extends('layout/main')


@section('title', 'Form Ubah Data Anggota UKM')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-8">
      <center><h2 class="mt-3"> Form Ubah Data Anggota UKM </h2></center>
       
       <form method="post" action="/clubs/{{ $club->id}}">
        @method('patch')
        @csrf

      <div class="form-group">
        <label for="nik">NIK</label>
        <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="Masukkan ID UKM Anda" name="nik" value="{{ $club->nik }}">
        @error('nik')
        <div class="invalid-feedback">{{ $message}}</div>
        @enderror
      </div>
        
      <div class="form-group">
        <label for="nama">Nama Anggota</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama UKM Anda" name="nama" value="{{$club->nama}}">
        @error('nama')
        <div class="invalid-feedback">{{ $message}}</div>
        @enderror
      </div>
       <div class="form-group">
        <label for="email">Email Anggota</label>
        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email UKM Anda" name="email" value="{{$club->email}}">
        @error('email')
        <div class="invalid-feedback">{{ $message}}</div>
        @enderror
      </div>
       <div class="form-group">
        <label for="no_tlp">No Handphone Anggota</label>
        <input type="text" class="form-control @error('no_tlp') is-invalid @enderror" id="no_tlp" placeholder="Masukkan no_tlp UKM Anda" name="no_tlp" value="{{$club->no_tlp}}">
        @error('no_tlp')
        <div class="invalid-feedback">{{ $message}}</div>
        @enderror
      </div>
    <div class="form-group">
        <label for="alamat">Alamat Lengkap</label>
        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan Alamat Anda" name="alamat" value="{{ $club->alamat }}">
         @error('alamat')
        <div class="invalid-feedback">{{ $message}}</div>
        @enderror
      </div>

    <div class="form-group">
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" placeholder="Masukkan tanggal_lahir" name="tanggal_lahir" value="{{ $club->tanggal_lahir }}">
        @error('tanggal_lahir')
        <div class="invalid-feedback">{{ $message}}</div>
        @enderror
      </div>

      <div class="form-group ">
     <label for="jenis_kelamin">Jenis Kelamin </label>
     
          <input type="radio" class="@error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" id='jenis_kelamin' value="{{ $club->jenis_kelamin }}" value="L">L
          <input type="radio" class="@error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" id="jenis_kelamin" value="{{ $club->jenis_kelamin }}" value="P" >P
          @error('jenis_kelamin')
        <div class="invalid-feedback">{{ $message}}</div>
        @enderror
</div>
      <div class="form-group">
        <label for="foto">Foto</label><br>
        <input type="file" class=" @error('foto') is-invalid @enderror" id="foto" name="foto" value="{{ $club->foto }}">
        @if (isset($club->foto))<br>
                        <img src="{{ asset('images/' . $club->foto) }}"width="200" height="150">
                    @else
                        @if ($club->foto)
                            <img src="{{ asset('images/5.jpg')  }}">
                        @else
                            <img src="{{ asset('images/4.jpg') }}">
                        @endif
                    @endif
      </div>
<button type="submit" class="btn btn-info">Ubah Data!</button>
<a href="/clubs" class="btn btn-outline-primary">Kembali</a>
</form>
     
     </div>
   </div>
 </div>

   @endsection