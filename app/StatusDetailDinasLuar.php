<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusDetailDinasLuar extends Model
{
  protected $table = 'status_detail_dinas_luar';

  protected $fillable = [
      'id',
      'id_detail_dinas_luar',
      'tanggal',
      'status',
  ];

  protected $primaryKey = 'id';
}
