<?php

use Illuminate\Http\Request;
use App\Models\CalonKetua;
use App\Models\User;
use Illuminate\Contracts\Cache\Store;
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
