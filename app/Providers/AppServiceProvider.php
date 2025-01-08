<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\SocialProfile;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\App;



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

        View::composer(['layouts.noindex', 'cursos'], function ($view) { // Asegúrate de incluir 'cursos'
            $language = App::getLocale();
            $logo = \App\Models\Logo::where('slug', 'principal-logo')->first();

            $menu = \App\Models\Menu::where('slug', 'main-menu')
                ->where('locale', $language)
                ->with('items.children')
                ->first();

            $view->with([
                'logo' => $logo ?: new \App\Models\Logo([
                    'name' => 'Default Logo',
                    'url' => asset('images/default-logo.png'),
                ]),
                'footerLinks' => $language === 'es'
                    ? [
                        ['url' => '/acerca-de', 'text' => 'Acerca de Nosotros'],
                        ['url' => '/contacto', 'text' => 'Contacto'],
                    ]
                    : [
                        ['url' => '/about', 'text' => 'About Us'],
                        ['url' => '/contact', 'text' => 'Contact'],
                    ],
                'metaTags' => [
                    'title' => $language === 'es' ? 'Cursos disponibles' : 'Available Courses',
                    'description' => $language === 'es'
                        ? 'Encuentra los mejores cursos aquí.'
                        : 'Find the best courses here.',
                ],
                'menu' => $menu,
            ]);
        });
    }



}
