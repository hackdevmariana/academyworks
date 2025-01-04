<?php

namespace App\Http\Controllers;

use App\Models\Reading;

class ReadingController extends Controller
{
    public function show($slug)
    {
        $reading = Reading::with('author', 'parts')->where('slug', $slug)->firstOrFail();
        return view('readings.show', compact('reading'));
    }
}
