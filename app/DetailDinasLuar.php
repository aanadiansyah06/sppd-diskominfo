<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailDinasLuar extends Model
{
    protected $table = 'detail_dinas_luar';

    protected $fillable = [
        'id',
        'id_dinas_luar',
        'nip',
    ];

    protected $primaryKey = 'id';
}
