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
        $model = new CalonKetua;
        return view('admin.add-calon', compact('model'), [
            'tittle' => "Add Calon"
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'foto' => 'required',
            'nama' => 'required',
            'nim' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ]);

        CalonKetua::create($validatedData);

        return redirect('/daftar-calon')->with('status', 'Add Data Succesfull!');
    }
}
