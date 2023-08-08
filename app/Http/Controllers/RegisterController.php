<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //

    public function create(){
        return view('register.create');
    }

    public function store(Request $req){
        $datas = $req->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255',
        ]);

        $user = User::create($datas);

        Auth::login($user);
        return redirect(route("home"))->with("success", "Your account has been created");
    }
}
