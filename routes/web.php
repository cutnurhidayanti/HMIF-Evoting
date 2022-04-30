<?php

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

// bagian mahasiswa
Route::get('/', function () { //fix
    return view('user/halaman-utama', [
        'tittle' => "halaman-utama",
    ]);
});

Route::get('/user-login', function () { //to do
    return view('user/user-login', [
        'tittle' => "user-login",
    ]);
});

Route::get('/signup', function () {
    return view('user/signup', [
        'tittle' => "signup",
    ]);
});

Route::get('/beranda', function () {
    return view('user/beranda', [
        'tittle' => "beranda",
    ]);
});

Route::get('/profil', function () {
    return view('user/profil', [
        'tittle' => "profil",
    ]);
});

Route::get('/daftar-calon', function () {
    return view('user/daftar-calon', [
        'tittle' => "daftar-calon",
    ]);
});

Route::get('/deskripsi-calon', function () {
    return view('user/deskripsi-calon', [
        'tittle' => "deskripsi-calon",
    ]);
});

Route::get('/voting', function () {
    return view('user/voting', [
        'tittle' => "voting",
    ]);
});

Route::get('/real-count', function () {
    return view('user/real-count', [
        'tittle' => "real-count",
    ]);
});

// bagian admin
Route::get('/admin-login', function () {
    return view('admin/admin-login', [
        'tittle' => "admin-login",
    ]);
});
