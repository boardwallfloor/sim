<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //
  protected $fillable = ['niu','nif','nama','nik','no_telp','email','alamat','angkatan','no_rek','nama_pemilik_ref','bank','npwp','password',
  ];

  protected $hidden = [
      'password',
  ];

  

}
