<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = DB::table('mahasiswas')->get();

        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }
}
