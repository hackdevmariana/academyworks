<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Speaker;
use App\Models\Place;

class SocialProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'socialnetwork',
        'url',
        'text',
        'owner_id',   // ID del modelo relacionado
        'owner_type', // Tipo del modelo relacionado
    ];


    /**
     * Relación polimórfica con el modelo propietario.
     */
    public function owner()
    {
        return $this->morphTo();
    }

    // public static function forOwner($name)
    // {
    //     $mapping = [
    //         'me' => [Contact::class, 1], // Clase y ID correspondientes
    //         'contact' => [Contact::class, 2],
    //         // Otros mapeos
    //     ];

    //     if (!isset($mapping[$name])) {
    //         return collect(); // Devuelve una colección vacía si no se encuentra
    //     }

    //     [$type, $id] = $mapping[$name];

    //     return self::where('owner_type', $type)
    //         ->where('owner_id', $id)
    //         ->get();
    // }

    public static function forOwner($name)
    {
        // Buscar en el modelo Speaker
        $speaker = Speaker::where('name', $name)->first();
        if ($speaker) {
            return self::where('owner_type', Speaker::class)
                ->where('owner_id', $speaker->id)
                ->get();
        }

        // Buscar en el modelo Place
        $place = Place::where('name', $name)->first();
        if ($place) {
            return self::where('owner_type', Place::class)
                ->where('owner_id', $place->id)
                ->get();
        }

        // Si no se encuentra en ninguno de los dos modelos, devolver una colección vacía
        return collect();
    }


    public static function forOwnerId($ownerId)
    {
        return self::where('owner_id', $ownerId)->get();
    }

    public function getIconAttribute()
    {
        return config('social_profiles.icons')[$this->socialnetwork] ?? 'bi bi-globe';
    }

    public function getColorAttribute()
    {
        return config('social_profiles.colors')[$this->socialnetwork] ?? 'black';
    }

}

