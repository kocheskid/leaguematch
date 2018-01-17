<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;
use App\User;


class AdminController extends Controller
{
    public function index(){
        if(Auth::check()){
            if (Auth::user()->hasRole('Admin') || Auth::user()->hasRole('Moderator')){
                return view('admin.home.index');
            }else{
                return view('admin.login.index');
            }
        }else{
            return view('admin.login.index');
        }

    }
}
