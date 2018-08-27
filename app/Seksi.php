<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seksi extends Model
{
    protected $table = 'seksi';

    protected $fillable = [
        'id',
        'id_seksi',
        'nama_seksi',
        'deskripsi_seksi',
    ];

    protected $primaryKey = 'id';
}
