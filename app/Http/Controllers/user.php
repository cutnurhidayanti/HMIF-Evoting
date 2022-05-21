<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
    public function data()
    {
        return view('user/daftar' [
            'tittle' => "Daftar-Calon"
        ]);
    }
}
