<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('/home', 'HomeController@index')->name('home');

//Register
Route::get('/register', 'RegisterController@index');
Route::post('register', 'RegisterController@create');
//Login
Route::get('/login', 'LoginController@index');
Route::post('login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

//Steam Auth
Route::get('auth/steam', 'AuthController@redirectToSteam')->name('auth.steam');
Route::get('auth/steam/handle', 'AuthController@handle')->name('auth.steam.handle');
//----------------------------------

//Facebook Auth
Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');
//-------------------------------------
