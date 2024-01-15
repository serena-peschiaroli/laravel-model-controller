<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     *
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $nav_items = [
                ['name' => 'Home', 'url' => route('home')],
                ['name' => 'Movies', 'url' => '#'], 
                ['name' => 'Tv Shows', 'url' => '#'], 
                ['name' => 'Community', 'url' => '#'], 
            ];

            $view->with('nav_items', $nav_items);
        });
    }
}
