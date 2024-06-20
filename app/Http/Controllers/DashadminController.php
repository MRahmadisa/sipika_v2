<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashadminController extends Controller
{
    public function index()
    {
        return view('dashadmin');
    }
}
