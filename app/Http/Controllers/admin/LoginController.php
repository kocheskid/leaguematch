<?php

namespace App\Http\Controllers\admin;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Auth;

class LoginController extends Controller
{
    public function index(){

        if(Auth::check()){
            return redirect()->to('/admin/admin');
        }

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

    protected function credentials(Request $request)
    {
        $field = filter_var($request->get($this->username()), FILTER_VALIDATE_EMAIL)
            ? $this->username()
            : 'username';

        return [
            $field => $request->get($this->username()),
            'password' => $request->password,
        ];
    }

    public function logout(){
        auth()->logout();

        return redirect()->to('/');
    }

}
