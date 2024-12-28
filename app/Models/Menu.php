<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Menu extends Model
{
    protected $fillable = ['name', 'slug', 'locale'];

    public function items()
    {
        return $this->hasMany(MenuItem::class)->whereNull('parent_id')->orderBy('order');
    }

    public static function forLocale($locale = null)
    {
        $locale = $locale ?? app()->getLocale(); // Usa el idioma actual si no se especifica
        return static::where('locale', $locale);
    }
}