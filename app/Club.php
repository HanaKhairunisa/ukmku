<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
 protected $fillable = ['nik','nama','email','no_tlp','alamat','tanggal_lahir','jenis_kelamin','foto'];
}
