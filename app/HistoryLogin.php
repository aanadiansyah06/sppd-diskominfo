<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoryLogin extends Model
{
  protected $table = 'history_login';

  protected $fillable = [
      'id',
      'id_user',
      'tanggal_login',
      'jam_login',
  ];

  protected $primaryKey = 'id';
}
