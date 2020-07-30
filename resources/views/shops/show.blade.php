@extends('layout/main')
@section('title', 'Detail Toko')
@section('container')
<div class="container">
  <div class="row">
    <div class="col-5">
       <h1 class="mt-3"> Detail Toko Usaha UKM </h1>
       <div class="card">
  <div class="card bg-light" style="max-width: 50rem;">
  <div class="card-header">Detail Toko</div>
  <div class="card-body">

    <h5 class="card-title">{{ $shop->id_ukm }}</h5>
    <h5 class="card-title">{{ $shop->nama_ukm }}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{ $shop->alamat }}</h6>
    <p class="card-text">{{ $shop->no_handphone }}</p>
    <p class="card-img-top">{{ $shop->tampilan }}</p>
   <tr>
                <th>Tampilan Toko UKM </th>
                <td>
                    @if (isset($shop->tampilan))
                        <img src="{{ asset('images/' . $shop->tampilan) }}"width="300" height="200">
                    @else
                        @if ($shop->tampilan)
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
   <a href="{{ $shop->id}}/edit" class="btn btn-outline-primary">Edit</a> 
   <a href="/shops" class="btn btn-outline-primary">Kembali</a>
@endsection
   
 </div>

   