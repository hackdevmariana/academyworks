<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\MetaTag;
use Illuminate\Support\Facades\App; 
use Illuminate\Support\Facades\Lang;




class HomeController extends Controller
{
    public function index(): View
    {
        //dd(Lang::get('messages.login'));
        $metaTags = MetaTag::where('route_name', 'home')->first();
        App::setLocale('es'); // O usa \Illuminate\Support\Facades\App::setLocale('es');
        

        return view('welcome', [
            'metaTags' => $metaTags,
        ]);
    }
}


