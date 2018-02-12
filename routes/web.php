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


Route::get('/admin/admin/login', 'admin\LoginController@index');
Route::post('/admin/admin/login', 'admin\LoginController@login');

//ADMIN NEWS
Route::get('/admin/news', 'admin\NewsController@index');
Route::get('/admin/news/create', 'admin\NewsController@create');
Route::post('/admin/news/create', 'admin\NewsController@store');


Route::group( ['middleware' => ['auth', 'has_permission']], function() {
    Route::get('/admin/admin', 'admin\AdminController@index');
    Route::resource('/admin/users', 'admin\UsersController');
    Route::resource('/admin/roles', 'RoleController');
    Route::resource('/admin/permissions','PermissionController');
    Route::get('/admin/news/edit/{id}', 'admin\NewsController@edit');
    Route::get('/admin/news/destroy/{id}', 'admin\NewsController@destroy');
    Route::post('/admin/news/update', 'admin\NewsController@update');

    Route::get('/admin/slider', 'admin\SliderController@index')->name('/admin/slider');
    Route::get('/admin/slider/create', 'admin\SliderController@create');
    Route::post('/admin/slider/create', 'admin\SliderController@create')->name('slider.create');
    Route::get('/admin/slider/edit/{id}', 'admin\SliderController@edit');
    Route::post('/admin/slider/update/{id}', 'admin\SliderController@update')->name('slider.update');
    Route::get('/admin/slider/destroy/{id}', 'admin\SliderController@destroy');

    Route::get('/admin/teams', 'admin\TeamController@index')->name('/admin/teams');
    Route::get('/admin/teams/edit/{id}', 'admin\TeamController@edit');
    Route::post('/admin/teams/create', 'admin\TeamController@create')->name('teams.create');
    Route::post('/admin/teams/update/{id}', 'admin\TeamController@update')->name('teams.update');
    Route::get('/admin/teams/destroy/{id}', 'admin\TeamController@destroy');

    Route::get('/admin/cups', 'admin\CupController@index')->name('/admin/cups');
    Route::get('admin/cups/edit/{id}', 'admin\CupController@edit');
    Route::get('/admin/cups/create', 'admin\CupController@create');
    Route::post('/admin/cups/create', 'admin\CupController@create')->name('cups.create');
    Route::post('/admin/cups/update/{id}', 'admin\CupController@update')->name('cups.update');
    Route::get('/admin/cups/destroy/{id}', 'admin\CupController@destroy');

    Route::get('/admin/leagues', 'admin\LeagueController@index')->name('/admin/leagues');
    Route::get('admin/leagues/edit/{id}', 'admin\LeagueController@edit');
    Route::get('/admin/leagues/create', 'admin\LeagueController@create');
    Route::post('/admin/leagues/create', 'admin\LeagueController@create')->name('leagues.create');
    Route::post('/admin/leagues/update/{id}', 'admin\LeagueController@update')->name('leagues.update');
    Route::get('/admin/leagues/destroy/{id}', 'admin\LeagueController@destroy');
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


Route::get('/news', 'NewsController@index');
Route::get('/news/{id}', 'NewsController@post');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/profile/', 'ProfileController@index');
    Route::post('/profile/update/', 'ProfileController@update');
});
