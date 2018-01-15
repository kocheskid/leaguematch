<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index(){
        return view('admin.login.index');
    }

    public function login(){
        $credentials = array('username'=>\request('username'), 'password'=>\request('login_password'));

        if (auth()->attempt($credentials) == false) {
            return back()->withErrors([
                'message' => 'The username or password is incorrect, please try again'
            ]);
        }

        Session::flash('Success', 'Login Successful!');
        return redirect()->to('/admin/admin');
    }
}
