<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggaran extends Model
{
    protected $table = 'anggaran';

    protected $fillable = [
        'id',
        'id_dinas',
        'tahun',
        'pagu',
        'sisa',
    ];

    protected $primaryKey = 'id';
}
