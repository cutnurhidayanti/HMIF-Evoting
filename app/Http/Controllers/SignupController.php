<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SignupController extends Controller
{
    public function index()
    {
        return view('user.signup');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'nim' => 'required',
            'password' => 'required|min:5',
            'confirm_password' => 'required',
            'email' => 'required|email|unique:users'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/user-login')->with('status', 'Registration Succesfull! please login');
    }
}
