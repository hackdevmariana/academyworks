<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'biography',
    ];

    /**
     * Relación uno a muchos con SocialProfile.
     */
    public function socialProfiles()
    {
        return $this->hasMany(SocialProfile::class, 'owner_slug', 'slug');
    }

    /**
     * Relación muchos a muchos con Video.
     */
    public function videos()
    {
        return $this->belongsToMany(Video::class);
    }
}
