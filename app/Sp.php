<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sp extends Model
{
    protected $table = 'sp';

    protected $fillable = [
        'id',
        'id_dinas_luar',
        'id_user',
        'tanggal_cetak',
        'jam_cetak',
    ];

    protected $primaryKey = 'id';
}
