<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPegawaiController extends Controller
{
    public function index()
    {
        return view('datapegawai');
    }

    public function inputdatapegawai()
    {
        return view('inputdatapegawai');
    }
}
