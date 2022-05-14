<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalonKetua;

class AdminController extends Controller
{

    // tampilan untuk admin
    public function index()
    {
        return view('admin/admin-login', [
            'tittle' => "Admin Login",
        ]);
    }

    // pengelolaan data calon ketua
    public function data_calon()
    {
        $data_calons = CalonKetua::all();

        return view('admin/daftar-calon', compact('data_calons'), [
            'tittle' => "Daftar-Calon"
        ]);
    }

    public function create()
    {
        return view('admin.add-calon', [
            'tittle' => "Add Calon"
        ]);
    }
}
