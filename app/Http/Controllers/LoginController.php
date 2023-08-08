<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{

    public function show(){
        return view("login.show");
    }

    public function login(Request $req){
        $datas = $req->validate([
            "email" => "required|exists:users,email",
            "password" => "required"
        ]);

        if(!Auth::attempt($datas)){
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.'
            ]);
        }

        session()->regenerate();

        return redirect(route('home'))->with('success', "Welcome Back!");
    }
    public function logout(){
        Auth::logout();

        return redirect(route('home'))->with('success', "Goodbye!");
    }
}
