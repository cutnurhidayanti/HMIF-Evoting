<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

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

Route::get('/user-login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/user-login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/signup', [SignupController::class, 'index'])->middleware('guest');
Route::post('/signup', [SignupController::class, 'store']);
// Route::get('/signup', [SignupController::class, 'confirmpass_algoritm'])->middleware(['auth', 'throttle:6,1']);
// Route::get('/signup', [SignupController::class, 'confirmpass'])->name('password.confirm')->middleware('auth');


// confirm password
// Route::get('/confirm-password', function () {
//     return view('auth.confirm-password');
// })->middleware('auth')->name('password.confirm');

// Route::post('/confirm-password', function (Request $request) {
//     if (!Hash::check($request->password, $request->user()->password)) {
//         return back()->withErrors([
//             'password' => ['The provided password does not match our records.']
//         ]);
//     }

//     $request->session()->passwordConfirmed();

//     return redirect()->intended();
// })->middleware(['auth', 'throttle:6,1']);
// akhir konfirmasi pass

Route::get('/beranda', [BerandaController::class, 'index'])->middleware('auth');


// bagian mahasiswa
Route::get('/', function () { //fix
    return view('user/halaman-utama', [
        'tittle' => "Halaman Utama",
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
Route::get('/admin-login', [AdminController::class, 'index']);
Route::get('/daftar-calon', [AdminController::class, 'data_calon']);
Route::get('/add-calon', [AdminController::class, 'create']);

Route::get('/beranda-admin', [BerandaController::class, 'admin']);
