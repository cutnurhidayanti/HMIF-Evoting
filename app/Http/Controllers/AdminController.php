<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalonKetua;
use App\Models\User;
use Illuminate\Contracts\Cache\Store;

class AdminController extends Controller
{

    // tampilan untuk admin
    public function index()
    {
        return view('admin/admin-login', [
            'tittle' => "Admin Login",
        ]);
    }

    public function timesetter()
    {
        return view('admin/time-setter', [
            'tittle' => "Time Setter",
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
            'image' => 'image|file|max:1024',
            'nama' => 'required',
            'nim' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('calon-ketua-img');
        } else {
            $validatedData['image'] = $request->file('img/profil-ketua.png')->store('calon-ketua-img');
        }

        CalonKetua::create($validatedData);

        return redirect('/daftar-calon')->with('success', 'Add Data Succesfull!');
    }

    public function destroy($id)
    {
        $post = CalonKetua::findOrFail($id);
        $post->delete();
        return redirect('/daftar-calon')->with('success', 'Data has been deleted!');
    }

    public function edit(CalonKetua $calonKetua)
    {
        return view('admin.edit-calon', [
            'calon_ketua' => $calonKetua,
            'tittle' => "Edit Calon"
        ]);
    }

    public function update(Request $request, $id) //masih pending
    {
        $request->validate([
            'foto' => 'required',
            'nama' => 'required',
            'nim' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $id->update($request->all());

        return redirect('/daftar-calon')->with('success', 'Data has been updated!');
    }

    // pengelolaan data user
    public function data_pemilih()
    {
        $data_Users = User::all();

        return view('admin.data-pemilih', compact('data_Users'), [
            'tittle' => "Data Pemilih",
        ]);
    }

    public function destroyuser($id)
    {
        $post = User::findOrFail($id);
        $post->delete();
        return redirect('/data-pemilih')->with('success', 'Data has been deleted!');
    }

    public function calon()
    {
        $data_calons = CalonKetua::all();

        return view('user/daftar', compact('data_calons'), [
            'tittle' => "Daftar Calon"
        ]);
    }
}
