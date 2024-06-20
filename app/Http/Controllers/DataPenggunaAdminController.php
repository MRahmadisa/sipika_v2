<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPenggunaAdminController extends Controller
{
    public function index()
    {
        return view('datapenggunaadmin');
    }

    public function inputdatapenggunaadmin()
    {
        return view('inputdatapenggunaadmin');
    }
}
