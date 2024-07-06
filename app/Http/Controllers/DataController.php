<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class DataController extends Controller
{
    public function dashboard()
    {
        $mahasiswas = Mahasiswa::all();
        return view('dashboard', compact('mahasiswas'));
    }

    public function inputData()
    {
        return view('input-data');
    }

    public function dataTabel()
    {
        $mahasiswas = Mahasiswa::all();
        return view('data-tabel', compact('mahasiswas'));
    }

}
