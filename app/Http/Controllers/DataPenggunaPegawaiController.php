<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPenggunaPegawaiController extends Controller
{
    public function index()
    {
        return view('datapenggunapegawai');
    }

    public function inputdatapenggunapegawai()
    {
        return view('inputdatapenggunapegawai');
    }
}
