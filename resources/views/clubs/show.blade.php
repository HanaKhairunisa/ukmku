@extends('layout/main')
@section('title', 'Detail Anggota')
@section('container')
<div class="container">
  <div class="row">
    <div class="col-5">
       <h1 class="mt-3"> Detail Anggota Usaha UKM </h1>
       <div class="card">
  <div class="card bg-light" style="max-width: 50rem;">
  <div class="card-header">Detail Anggota</div>
  <div class="card-body">

    <h5 class="card-title">{{ $club->nik }}</h5>
    <h5 class="card-title">{{ $club->nama }}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{ $club->email }}</h6>
    <p class="card-text">{{ $club->no_tlp }}</p>
    <p class="card-text">{{ $club->alamat }}</p>
    <p class="card-text">{{ $club->tanggal_lahir }}</p>
    <p class="card-text">{{ $club->jenis_kelamin }}</p>
    <p class="card-img-top">{{ $club->foto }}</p>
   <tr>
                <th>foto Toko UKM </th>
                <td>
                    @if (isset($club->foto))
                        <img src="{{ asset('images/' . $club->foto) }}"width="200" height="250">
                    @else
                        @if ($club->foto)
                            <img src="{{ asset('images/5.jpg')  }}">
                        @else
                            <img src="{{ asset('images/4.jpg') }}">
                        @endif
                    @endif
                </td>
            </tr>
</div>
     </div>
   </div>
   <a href="{{ $club->id}}/edit" class="btn btn-outline-primary">Edit</a>
   <form action="{{ $club->id }}" method="post" class="d-inline">
   @method('delete')
   @csrf 
   <button type="submit" class="btn btn-outline-danger">Delete</button></form>
   <a href="/clubs" class="btn btn-outline-primary">Kembali</a>
@endsection
   
 </div>

   