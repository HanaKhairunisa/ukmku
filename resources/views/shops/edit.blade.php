@extends('layout/main')


@section('title', 'Form Ubah Data Toko UKM')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-8">
      <center><h2 class="mt-3"> Form Ubah Data Toko UKM </h2></center>
       
       <form method="POST" action="/shops/{{ $shop->id}}">
        @method('patch')
        @csrf

      <div class="form-group">
        <label for="id_ukm">ID UKM</label>
        <input type="text" class="form-control @error('id_ukm') is-invalid @enderror" id="id_ukm" placeholder="Masukkan ID UKM Anda" name="id_ukm" value="{{ $shop->id_ukm }}">
        @error('id_ukm')
        <div class="invalid-feedback">{{ $message}}</div>
        @enderror
      </div>
        
      <div class="form-group">
        <label for="nama_ukm">Nama UKM</label>
        <input type="text" class="form-control @error('nama_ukm') is-invalid @enderror" id="nama_ukm" placeholder="Masukkan Nama UKM Anda" name="nama_ukm" value="{{$shop->nama_ukm}}">
        @error('nama_ukm')
        <div class="invalid-feedback">{{ $message}}</div>
        @enderror
      </div>

    <div class="form-group">
        <label for="alamat">Alamat Lengkap</label>
        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan Alamat Anda" name="alamat" value="{{ $shop->alamat }}">
         @error('alamat')
        <div class="invalid-feedback">{{ $message}}</div>
        @enderror
      </div>

    <div class="form-group">
        <label for="no_handphone">No Handphone</label>
        <input type="text" class="form-control @error('no_handphone') is-invalid @enderror" id="no_handphone" placeholder="Masukkan No Handphone" name="no_handphone" value="{{ $shop->no_handphone }}">
        @error('no_handphone')
        <div class="invalid-feedback">{{ $message}}</div>
        @enderror
      </div>

      <div class="form-group">
        <label for="Tampilan">Gambar UKM</label><br>
        <input type="file" class=" @error('tampilan') is-invalid @enderror" id="tampilan" name="tampilan" value="{{ $shop->tampilan }}">
        @if (isset($shop->tampilan))<br>
                        <img src="{{ asset('images/' . $shop->tampilan) }}"width="200" height="150">
                    @else
                        @if ($shop->tampilan)
                            <img src="{{ asset('images/5.jpg')  }}">
                        @else
                            <img src="{{ asset('images/4.jpg') }}">
                        @endif
                    @endif
      </div>


<button type="submit" class="btn btn-info">Ubah Data</button>
<a href="/shops" class="btn btn-outline-primary">Kembali</a>
</form>
     
     </div>
   </div>
 </div>

   @endsection