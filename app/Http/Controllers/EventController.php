<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\MetaTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


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
        $locale = session('locale', config('app.locale'));
        App::setLocale($locale);
        $event = Event::where('slug', $slug)->firstOrFail();
        $logo = \App\Models\Logo::where('slug', 'principal-logo')->first();
        $metaTags = MetaTag::where('route_name', 'event/' . $slug)->first();
        $menu = \App\Models\Menu::where('slug', 'main-menu')
            ->where('locale', $locale)
            ->with('items.children')
            ->first();

        return view('events.show', compact('event', 'metaTags', 'logo', 'menu'));
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
