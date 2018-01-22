<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
     protected $table="murid";
   protected $fillable=["nama_siswa","kelamin","tempat_lahir","alamat","nohp","tahun_masuk","kelas"];
}
