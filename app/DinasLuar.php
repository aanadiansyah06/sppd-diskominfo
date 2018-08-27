<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DinasLuar extends Model
{
    protected $table = 'dinas_luar';

    protected $fillable = [
        'id',
        'tanggal_mulai',
        'tanggal_selsai',
        'tujuan',
        'pic_tujuan',
        'jumlah_pegawai',
        'alamat',
        'kota',
        'provinsi',
        'jumlah_anggaran',
    ];

    protected $primaryKey = 'id';
}
