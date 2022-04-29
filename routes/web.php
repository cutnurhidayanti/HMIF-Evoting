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
    return view('user/halaman-utama');
});

Route::get('/user-login', function () { //to do
    return view('user/user-login');
});

Route::get('/signup', function () {
    return view('user/signup');
});

Route::get('/beranda', function () {
    return view('user/beranda');
});

Route::get('/profil', function () {
    return view('user/profil');
});

Route::get('/daftar-calon', function () {
    return view('user/daftar-calon');
});

Route::get('/deskripsi-calon', function () {
    return view('user/deskripsi-calon');
});

Route::get('/voting', function () {
    return view('user/voting');
});

Route::get('/real-count', function () {
    return view('user/real-count');
});

// bagian admin
Route::get('/admin-login', function () {
    return view('admin/admin-login');
});
