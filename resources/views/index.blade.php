@extends('layout/main')


@section('title', 'ukm')

@section('container')
<div class="container">
 <div class="row">
   <div class="col-50">
     
  <div class="card-body">
         
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol> 

<div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/bg1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Hi Welcome!</h5>
        <p>Selamat Datang di WEB UKM </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/bg2.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Perkenalkan Nama saya Hana Khairunisa</h5>
        <p>Saya dari Kelas TI 6-C NIM saya 4817070663.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/bg3.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>INFO</h5>
        <p>Ini dibuat untuk memenuhi tugas UAS WEB3.</p>
      </div>
    </div>
  </div>
                
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
 </div> 
</div>
   @endsection