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
        return $this->morphMany(SocialProfile::class, 'owner');
    }
    

    /**
     * Relación muchos a muchos con Video.
     */
    public function videos()
    {
        return $this->belongsToMany(Video::class);
    }
    public function getDisplayNameAttribute(): string
    {
        return $this->name;
    }
}
