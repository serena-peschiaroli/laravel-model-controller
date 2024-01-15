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

            $footer_links = [
                'Item1' => [
                    'title' => 'THE BASICS',
                    'links' => ['About Us', 'Contact Us', 'Forum',],
                ],
                'Item2' => [
                    'title' => "GET INVOLVED",
                    'links' => ["Contribution", "Add Movie", "Add Tv Show"],
                ],
                'Item3' => [
                    'title' => "COMMUNITY",
                    'links' => ["Guidelines", "Discussions", "Leaderboard"],
                ],
                'Item4' => [
                    'title' => "LEGAL",
                    'links' => ["Terms of Use", "Privacy Policy", "DMCA Policy"],
                ],

            ];

            $view->with(compact('nav_items', 'footer_links'));
        });
    }
}
