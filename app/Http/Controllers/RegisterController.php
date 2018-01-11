<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register.register');
    }

    public function create(){

        $this->validate(request(), [
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed'
        ]);

        $user = User::create(request(['username', 'email', 'password']));

        auth()->login($user);

        return redirect()->to('/');

    }
}
