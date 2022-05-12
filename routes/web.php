<?php

use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/user-login', [LoginController::class, 'index']);

Route::get('/signup', [SignupController::class, 'index']);
Route::post('/signup', [SignupController::class, 'store']);

// bagian mahasiswa
Route::get('/', function () { //fix
    return view('user/halaman-utama', [
        'tittle' => "Halaman Utama",
    ]);
});

// Route::get('/user-login', function () { //to do
//     return view('user/user-login', [
//         'tittle' => "User Login",
//     ]);
// });

Route::get('/signup', function () {
    return view('user/signup', [
        'tittle' => "User SignUp",
    ]);
});

Route::get('/beranda', function () {
    return view('user/beranda', [
        'tittle' => "Beranda",
    ]);
});

Route::get('/profil', function () {
    return view('user/profil', [
        'tittle' => "Profil User",
    ]);
});

Route::get('/daftar-calon', function () {
    return view('user/daftar-calon', [
        'tittle' => "Daftar Calon",
    ]);
});

Route::get('/deskripsi-calon', function () {
    return view('user/deskripsi-calon', [
        'tittle' => "Deskripsi Calon",
    ]);
});

Route::get('/voting', function () {
    return view('user/voting', [
        'tittle' => "Voting",
    ]);
});

Route::get('/real-count', function () {
    return view('user/real-count', [
        'tittle' => "Real Count",
    ]);
});

// bagian admin
Route::get('/admin-login', function () {
    return view('admin/admin-login', [
        'tittle' => "Admin Login",
    ]);
});

Route::get('/main', function () {
    return view('layouts/main', [
        'tittle' => "main",
    ]);
});
