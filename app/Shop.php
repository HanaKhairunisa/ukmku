<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{

   protected $fillable = ['id_ukm','nama_ukm','alamat','no_handphone','tampilan'];
}
