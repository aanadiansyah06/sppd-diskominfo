<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sppd extends Model
{
    protected $table = 'sppd';

    protected $fillable = [
        'id',
        'id_detail_dinas_luar',
        'id_user',
        'tanggal_cetak',
        'jam_cetak',
    ];

    protected $primaryKey = 'id';
}
