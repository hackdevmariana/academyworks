<?php

namespace App\Http\Controllers;

use App\Models\Speaker;

class SpeakerController extends Controller
{
    /**
     * Mostrar el listado de Speakers.
     */
    public function index()
    {
        $speakers = Speaker::with('socialProfiles', 'videos')->get();
        return view('speakers.index', compact('speakers'));
    }

    /**
     * Mostrar los detalles de un Speaker.
     */
    public function show($id)
    {
        $speaker = Speaker::with('socialProfiles', 'videos')->findOrFail($id);
        return view('speakers.show', compact('speaker'));
    }
}
