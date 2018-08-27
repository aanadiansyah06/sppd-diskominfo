<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';

    protected $fillable = [
        'id',
        'nama_role',
        'deskripsi_role',
    ];

    protected $primaryKey = 'id';
}
