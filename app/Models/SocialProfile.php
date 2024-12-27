<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialProfile extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'socialnetwork',
        'url',
        'text',
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

}
