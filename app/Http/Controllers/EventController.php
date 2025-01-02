<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\MetaTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Place;
use App\Models\Logo;
use App\Models\Menu;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        // Establecer el idioma
        $locale = session('locale', config('app.locale'));
        App::setLocale($locale);

        // Obtener el evento por slug
        $event = Event::where('slug', $slug)->firstOrFail();

        // Obtener información adicional
        $logo = Logo::where('slug', 'principal-logo')->first();
        $metaTags = MetaTag::where('route_name', 'event/' . $slug)->first();
        $menu = Menu::where('slug', 'main-menu')
            ->where('locale', $locale)
            ->with('items.children')
            ->first();

        // Obtener el lugar del evento si está definido
        $place = $event->place
            ? Place::where('slug', $event->place)->first()
            : null;

        // Pasar los datos a la vista
        return view('events.show', compact('event', 'metaTags', 'logo', 'menu', 'place', 'locale'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}
