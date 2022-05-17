<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalonKetua;
use App\Models\User;

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

        return redirect('/daftar-calon')->with('success', 'Add Data Succesfull!');
    }

    public function destroy($id) //belom fix
    {
        $post = CalonKetua::findOrFail($id);
        $post->delete();
        return redirect('/daftar-calon')->with('success', 'Data has been deleted!');
    }

    public function edit(CalonKetua $calonKetua)
    {
        $model = new CalonKetua;
        return view('admin.edit-calon', compact('model'), [
            'calon_ketua' => $calonKetua,
            'tittle' => "Edit Calon"
        ]);
    }

    public function update($id) //masih pending
    {
        $model = CalonKetua::find($id);
        return view('admin.update-calon', compact('model'), [
            'tittle' => "Add Calon"
        ]);
    }

    // pengelolaan data user
    public function data_pemilih()
    {
        $data_Users = User::all();

        return view('admin.data-pemilih', compact('datas_Users'), [
            'tittle' => "Data Pemilih",
        ]);
    }
}
