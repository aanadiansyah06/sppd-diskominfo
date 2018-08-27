<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
  protected $table = 'bidang';

  protected $fillable = [
      'id',
      'id_opd',
      'nama_bidang',
      'deskripsi_bidang',
  ];

  protected $primaryKey = 'id';
}
