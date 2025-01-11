<?php

namespace App\Http\Controllers;

use App\Models\Reading;
use Illuminate\Http\Request;

class ReadingController extends Controller
{
    public function index()
    {
        // Obtiene todas las lecturas con sus autores
        $readings = Reading::with('author')->get();

        return view('readings.index', compact('readings'));
    }

    public function show($slug)
    {
        // Encuentra una lectura por su slug y carga sus partes
        $reading = Reading::with(['parts', 'author'])->where('slug', $slug)->firstOrFail();

        return view('readings.show', compact('reading'));
    }
    public function showPart($slug, $partSlug)
    {
        // Encuentra la lectura por su slug
        $reading = Reading::where('slug', $slug)->firstOrFail();

        // Encuentra la parte de lectura por su slug y asociada a esta lectura
        $part = $reading->parts()->where('slug', $partSlug)->firstOrFail();

        return view('readings.part.show', compact('reading', 'part'));
    }

}
