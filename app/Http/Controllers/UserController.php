<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalonKetua;
class UserController extends Controller
{
    public function votingPage(){
        return view('user.voting')->with(['candidates'=>CalonKetua::all(), 'tittle' => 'Voting',]);
    }
}
