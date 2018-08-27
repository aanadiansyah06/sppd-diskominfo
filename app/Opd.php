<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opd extends Model
{
    protected $table = 'opd';

    protected $fillable = [
        'id',
        'nama_opd',
        'deskripsi_opd',
    ];

    protected $primaryKey = 'id';
}
