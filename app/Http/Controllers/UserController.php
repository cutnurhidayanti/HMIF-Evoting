<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalonKetua;
use App\Models\User;

class UserController extends Controller
{
    public function daftarCalon()
    {
        return view('user.daftar')->with([
            'data_calons' => CalonKetua::all(),
            'tittle' => "Daftar Calon",
        ]);
    }

    public function votingPage()
    {
        return view('user.voting')->with(['candidates' => CalonKetua::all(), 'tittle' => 'Voting',]);
    }

    public function berandaPage()
    {
        return view('user.beranda')->with(['show' => CalonKetua::all(), 'tittle' => 'Beranda',]);
    }

    public function countPage()
    {
        return view('user.real-count')->with(['result' => CalonKetua::all(), 'tittle' => 'Count',]);
    }


    public function voting(Request $id)
    {
        $calon = CalonKetua::where('id', $id->id)->first();
        $suara = $calon['total_suara'] + 1;
        $calon->update(['total_suara' => $suara]);
        User::where('id', auth()->user()->id)->first()->update(['Status' => True]);
        return redirect('voting');
    }
}
