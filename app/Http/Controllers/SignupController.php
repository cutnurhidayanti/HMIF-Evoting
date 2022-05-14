<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class SignupController extends Controller
{
    public function index()
    {
        return view('user/signup', [
            'tittle' => "User SignUp",
        ]);
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
        $validatedData['confirm_password'] = bcrypt($validatedData['confirm_password']);

        User::create($validatedData);

        return redirect('/user-login')->with('status', 'Registration Succesfull! please login');
    }

    // public function confirmpass_algoritm(Request $request)
    // {
    //     if (!Hash::check($request->password, $request->user()->password)) {
    //         return back()->withErrors([
    //             'password' => ['The provided password does not match our records.']
    //         ]);
    //     }

    //     $request->session()->passwordConfirmed();

    //     return redirect()->intended();
    // }
}
