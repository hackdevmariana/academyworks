<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\MetaTag;
use Illuminate\Support\Facades\App;
use App\Models\Hero;
use App\Models\Course;



class HomeController extends Controller
{
    public function index(): View
    {
        // Establecer el idioma (puedes ajustarlo según tu lógica de selección de idioma)
        $locale = session('locale', config('app.locale'));
        App::setLocale($locale);

        // Cargar metaetiquetas
        $metaTags = MetaTag::where('route_name', 'home')->first();

        // Cargar logo
        $logo = \App\Models\Logo::where('slug', 'principal-logo')->first();

        // Cargar menú basado en el idioma
        $menu = \App\Models\Menu::where('slug', 'main-menu')
            ->where('locale', $locale)
            ->with('items.children') // Relación con elementos del menú
            ->first();

        $heroes = Hero::where('is_active', true)->where('language', session('locale', config('app.locale')))->get();

        $locale = session('locale', config('app.locale'));
        App::setLocale($locale);
        return view('welcome', [
            'metaTags' => $metaTags,
            'logo' => $logo,
            'menu' => $menu,
            'heroes' => $heroes,
            'courses' => Course::where('language', $locale)->get(),
        ]);
    }
}

