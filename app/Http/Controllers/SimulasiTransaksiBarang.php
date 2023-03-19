<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimulasiTransaksiBarang extends Controller
{
    public function index(){
        return view('simulasiTransaksiBarang.index');
    }
}
