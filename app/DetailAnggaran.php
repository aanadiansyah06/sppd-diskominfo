<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailAnggaran extends Model
{
    protected $table = 'detail_anggaran';

    protected $fillable = [
        'id',
        'id_anggaran',
        'id_sppd',
        'dana',
    ];

    protected $primaryKey = 'id';
}
