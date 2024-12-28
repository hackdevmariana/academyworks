<?php

use App\Models\Translation;

if (!function_exists('translate')) {
    function translate($key, $locale = null)
    {
        $locale = $locale ?? session('locale', config('app.locale')); // Usa el idioma en sesión o el predeterminado

        // Usar caché solo si está habilitada
        if (config('cache.enabled', true)) {
            return Cache::rememberForever("translation_{$locale}_{$key}", function () use ($key, $locale) {
                return Translation::where('key', $key)->where('locale', $locale)->value('value') ?? $key;
            });
        }

        // Consulta directa si la caché está deshabilitada
        return Translation::where('key', $key)->where('locale', $locale)->value('value') ?? $key;
    }
}
