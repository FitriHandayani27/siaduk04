<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    // public function index()
    // {
    //     // return view ('admin.dashboard');
    //     return view('admin.adminDashboard',  ['title' => 'Home Page']);
    // }

    public function index() {
    $siswa = siswa::get();  // Fetch all data from the Siswa model

    return view('admin.adminDashboard', compact('siswa'),['title' => 'Home Page']);
    }




}


