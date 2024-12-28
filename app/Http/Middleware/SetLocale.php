<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        // Obtén el idioma de la sesión o usa el predeterminado de la configuración
        $locale = Session::get('locale', config('app.locale'));

        // Establece el idioma de la aplicación
        App::setLocale($locale);

        return $next($request);
    }
}
