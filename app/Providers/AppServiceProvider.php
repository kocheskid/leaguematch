<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Auth;
use App\UserInfo;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('layouts.app', function($view)
        {
            if(Auth::check()) {

                $user_id = Auth::user()->id;
                $user_info = new UserInfo();

                $view->with('steamid_check', $user_info->checkUserSteamID($user_id));

            }

        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
