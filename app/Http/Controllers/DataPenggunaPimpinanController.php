<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPenggunaPimpinanController extends Controller
{
    public function index()
    {
        return view('datapenggunapimpinan');
    }

    public function inputdatapenggunapimpinan()
    {
        return view('inputdatapenggunapimpinan');
    }

}
