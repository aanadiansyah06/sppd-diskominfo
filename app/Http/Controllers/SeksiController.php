<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeksiController extends Controller
{
    public function index()
    {
      return view('seksi.index');
    }
}
