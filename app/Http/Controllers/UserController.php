<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    function login(Request $req){
        $credentials = $req->validate([
            'email' => 'required|email',
            'password' =>'required'
        ]);

        if($req->remember){
            Cookie::queue('emailCookie', $req->email, 60);
            Cookie::queue('passwordCookie', $req->password, 60);
        }
        if(Auth::attempt($credentials)){
            $req->session()->regenerate();
            $req->session()->put('user', Auth::user());
            return redirect()->intended('/');
        }
        return back()->with('loginError', 'Login Failed');
    }

    function register(Request $req){
        $validatedData = $req->validate([
            'name' => 'required|min:4',
            'email' => 'required|email||unique:users,email',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' =>'required|min:6'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/login')->with('success', 'Registration Success');
    }
}
