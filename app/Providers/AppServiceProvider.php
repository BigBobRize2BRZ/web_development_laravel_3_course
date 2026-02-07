<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View as IlluminateView;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Переменная глобальная
        View::share('SITE_TITLE', 'Название');

        view()->composer('home.*', function(IlluminateView $view) {
            $menu = '<nav>';
            $menu .= '<ul>';
            $menu .= '<li><a href="' . route('home.index') . '">Home</a></li>';
            $menu .= '<li><a href="' . route('home.test') . '">Test</a></li>';
            $menu .= '<li><a href="' . route('home.contact') . '">Contact</a></li>';
            $menu .=  '</ul>';
            $menu .= '</nav>';
            return $view->with('menu', $menu);
        });
    }
}
