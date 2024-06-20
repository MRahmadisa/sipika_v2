<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresensiController extends Controller
{
    public function presensiMasuk(Request $request)
    {
        // Handle presensi masuk logic
        // e.g., save to database
        return response()->json(['message' => 'Presensi Masuk recorded successfully']);
    }

    public function presensiPulang(Request $request)
    {
        // Handle presensi pulang logic
        // e.g., update database
        return response()->json(['message' => 'Presensi Pulang recorded successfully']);
    }
}
