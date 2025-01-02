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
        'owner_type',
        'owner_id',
    ];

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
     * Relación polimórfica con el modelo propietario (Place o Speaker).
     */
    public function owner()
    {
        return $this->morphTo();
    }
}

