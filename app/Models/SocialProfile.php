<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
     * Iconos disponibles para las redes sociales.
     */
    public function getIconAttribute()
    {
        $icons = [
            'twitter' => 'bi bi-twitter',
            'instagram' => 'bi bi-instagram',
            'linkedin' => 'bi bi-linkedin',
            'youtube' => 'bi bi-youtube',
        ];

        return $icons[$this->socialnetwork] ?? 'bi bi-globe';
    }

    /**
     * Relación polimórfica con el modelo propietario.
     */
    public function owner()
    {
        return $this->morphTo();
    }
}

