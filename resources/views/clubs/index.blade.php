@extends('layout/main')


@section('title', 'Anggota')

@section('container')
<div class="container">
 <div class="row">
   <div class="col-6">
     
  <h1 class="mt-1">Daftar Anggota UKM</h1>
  <a href="/clubs/create" class="btn btn-dark my-2">Tambah Data Anggota</a>
<ul class="list-group">
  @foreach ( $clubs as $club )
  <li class="list-group-item d-flex justify-content-between align-items-center">
  {{ $club->nama }}
   <a href="/clubs/{{ $club->id }}" class="btn btn-warning">Detail</a>

  </li>
  @endforeach
      </ul>
        </div>
          </div>
            </div>

   @endsection