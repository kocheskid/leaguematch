<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Response;

class PermissionMiddleware
{
    public function handle($request, Closure $next) {

        if (Auth::user()->hasRole('Admin') || Auth::user()->hasRole('Moderator')) //If user has admin role
        {

            return $next($request);

        }else{

            return new Response(view('admin.401'));
        }
//        if (Auth::user()->hasRole('User')) //If user has user role
//        {
//            if ($request->is('posts/create'))//If user is creating a post
//            {
//                if (!Auth::user()->hasPermissionTo('addPost'))
//                {
//                 //   abort('401');
//                }
//                else {
//                    return $next($request);
//                }
//            }
//        }

       // return $next($request);
    }
}