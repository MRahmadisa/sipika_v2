<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataJabatanController extends Controller
{
    public function index()
    {
        return view('datajabatan');
    }

    public function inputdatajabatan()
    {
        return view('inputdatajabatan');
    }
}
