<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
{
    $dataSiswa = \App\Models\Siswa::all(); // Mengambil semua data siswa
    return view('userDashboard', compact('dataSiswa'));
}

}
