<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\MetaTag;

class HomeController extends Controller
{
    public function index(): View
    {
        $metaTags = MetaTag::where('route_name', 'home')->first();

        return view('welcome', [
            'metaTags' => $metaTags,
        ]);
    }

}

