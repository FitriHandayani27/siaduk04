<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\UserDashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);

Route::get('user/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->middleware(['auth', 'user'])->name('dashboard');

Route::get('userdashboard', function () {
    return view('userDashboard');
});

Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);


Route::get('/tambahDashboard', [SiswaController::class, 'view']);

Route::post('/siswa/submit', [SiswaController::class, 'store'])->name('siswa.submit');


Route::get('user/dashboard', [SiswaController::class, 'index']);

Route::get('/user/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');


Route::post('/siswa/submit', [SiswaController::class, 'store'])->name('siswa.submit');
Route::post('/siswa/submit', [SiswaController::class, 'store'])->name('siswa.submit');

Route::get('/siswa/tambah', [SiswaController::class, 'tambah'])->name('siswa.tambah');

Route::get('/siswa/tampil', [SiswaController::class, 'tampil'])->name('siswa.tampil');
Route::get('/siswa/tambah', [SiswaController::class, 'tambah'])->name('siswa.tambah');
Route::post('/siswa/submit', [SiswaController::class, 'submit'])->name('siswa.submit');


Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');

