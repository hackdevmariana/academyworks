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
        'owner_slug',
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

    public function owner()
    {
        return $this->belongsTo(Place::class, 'owner_slug', 'slug')
            ->orWhere($this->belongsTo(User::class, 'owner_slug', 'slug'));
    }
}
