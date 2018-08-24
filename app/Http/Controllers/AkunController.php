<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function masuk()
    {
        return view('akun.masuk');
    }
}
