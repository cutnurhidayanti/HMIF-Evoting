<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class BerandaController extends Controller
{
    public function index()
    {
        return view('user.beranda', [
            'tittle' => 'Beranda',
        ]);
    }

    public function berandaAdmin()
    {
        return view('admin/Beranda-admin', [
            'tittle' => "Beranda Admin",
        ]);
    }
}
