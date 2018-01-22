<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    
   protected $table="guru";
   protected $fillable=["nik","nama_guru","mata_pelajaran","kelas","usia","alamat","nohp"];
}

