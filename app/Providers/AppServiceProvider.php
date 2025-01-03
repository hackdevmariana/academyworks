<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\SocialProfile;
use Illuminate\Support\Facades\View;



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
    public function boot()
    {
        View::composer(['partials.footer', 'partials.header', 'partials.navbar'], function ($view) {
            $mySocialProfiles = SocialProfile::forOwner('me');
            $view->with('mySocialProfiles', $mySocialProfiles);
        });
    }


}
