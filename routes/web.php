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

Route::get('/', 'HomeController@index');


//ADMIN PAGES

Route::get('/admin/admin', 'admin\AdminController@index');
Route::get('/admin/admin/login', 'admin\LoginController@index');
Route::post('/admin/admin/login', 'admin\LoginController@login');

//ADMIN NEWS
Route::get('/admin/news', 'admin\NewsController@index');
Route::get('/admin/news/create', 'admin\NewsController@create');
Route::post('/admin/news/create', 'admin\NewsController@store');

Route::group( ['middleware' => ['auth', 'has_permission']], function() {
    Route::resource('/admin/users', 'admin\UsersController');
    Route::resource('/admin/roles', 'RoleController');
    Route::resource('/admin/permissions','PermissionController');
});


Route::get('/admin/401', function(){
    return view('admin.401');
});
//ADMIN - END

//Register
Route::get('/register', 'RegisterController@index');
Route::post('register', 'RegisterController@create');
//Login
Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

//Steam Auth
Route::get('auth/steam', 'AuthController@redirectToSteam')->name('auth.steam');
Route::get('auth/steam/handle', 'AuthController@handle')->name('auth.steam.handle');
//----------------------------------

//Facebook Auth
Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');
//-------------------------------------
