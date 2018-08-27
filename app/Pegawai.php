<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';

    protected $fillable = [
        'id',
        'nip',
        'nik',
        'nama',
        'telepon',
        'golongan',
        'eselon',
        'jabatan',
        'id_opd',
        'id_bidang',
        'id_seksi',
    ];

    protected $primaryKey = 'id';
}
