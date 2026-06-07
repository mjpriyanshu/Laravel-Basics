<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        /*
        Sharing data with all views in the application
         The view()->share() method allows you to pass variables to every view automatically.
         This is useful for global data like site name, links, or user info that should be available everywhere.
         Here, we share 'uni' (set to 'lpu') and 'link' (set to 'url') with all Blade views.
        */
         
        view()->share(['uni' => 'lpu', 'link' => 'url']); 

        /*
         * Working and Flow:
         * - When the application boots, this method runs automatically.
         * - The view()->share() function registers the provided data globally.
         * - Any Blade view can now access $uni and $link variables directly, without needing to pass them from controllers.
         *
         * Why it's used:
         * - To avoid repeating the same data passing in every controller or route.
         * - Ensures consistency and reduces code duplication for common data needed in multiple views.
         */
    }
}
