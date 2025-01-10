<?php
namespace App\Http\Controllers;

use App\Models\Speaker;
use Illuminate\Http\Request;

class SpeakerController extends Controller
{
    public function index()
    {
        $speakers = Speaker::all();
        return view('speakers.index', compact('speakers'));
    }

    public function show($slug)
    {
        $speaker = Speaker::where('slug', $slug)->firstOrFail();
        return view('speakers.show', compact('speaker'));
    }
}
