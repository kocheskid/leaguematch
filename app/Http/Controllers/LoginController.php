<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function login(){
        if (auth()->attempt(request(['username', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The username or password is incorrect, please try again'
            ]);
        }

        return redirect()->to('/');
    }

    public function logout(){
        auth()->logout();

        return redirect()->to('/');
    }
}
