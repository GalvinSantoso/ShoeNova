<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    function login(Request $req){
        $req->validate([
            'email' => 'required|email',
            'password' =>'required'
        ]);

        if($req->remember){
            Cookie::queue('emailCookie', $req->email, 60);
            Cookie::queue('passwordCookie', $req->password, 60);
        }

        $user = User::where(['email' => $req->email])->first();
        if(!$user || !Hash::check($req->password, $user->password)){
            return back()->with('loginError', 'Login Failed');
        }else{
            $req->session()->put('user', $user);
            return redirect('/');
        }
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
