<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('post', function($view){

            $view->with('access', $this->checkIfAdmin());
        });

        view()->composer('partials.edit_post_buttons', function($view){

            $view->with('access', $this->checkIfAdmin());
        });

        view()->composer('partials.create_album_button', function($view){

            $view->with('access', $this->checkIfAdmin());
        });

        view()->composer('home', function($view){

            $view->with('access', $this->checkIfAdmin());
        });

        view()->composer('gallery.show', function($view){

            $view->with('access', $this->checkIfAdmin());
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

    public function checkIfAdmin(){

        if (Auth::check() && Auth::user()->getAuthIdentifier() == 3) {

            return true;
        }
        else {

            return false;
        };
    }
}
