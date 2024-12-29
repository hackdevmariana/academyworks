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
    $locale = session('locale', config('app.locale'));
    App::setLocale($locale);

    $metaTags = MetaTag::where('route_name', 'home')->first();
    $logo = \App\Models\Logo::where('slug', 'principal-logo')->first();
    $menu = \App\Models\Menu::where('slug', 'main-menu')
        ->where('locale', $locale)
        ->with('items.children')
        ->first();

    $heroes = Hero::where('is_active', true)->where('language', $locale)->get();
    $events = \App\Models\Event::where('language', $locale)->get();

    return view('welcome', [
        'metaTags' => $metaTags,
        'logo' => $logo,
        'menu' => $menu,
        'heroes' => $heroes,
        'events' => $events,
        'courses' => Course::where('language', $locale)->get(),
    ]);
}

}

