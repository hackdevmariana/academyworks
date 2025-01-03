<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'logo',
        'address',
        'city',
        'postcode',
        'country',
        'website',
        'phone',
        'email',
        'social_networks',
    ];

    protected $casts = [
        'social_networks' => 'array', // Cast del campo JSON
    ];

    public function socialProfiles()
    {
        return $this->morphMany(SocialProfile::class, 'owner');
    }
    public function getDisplayNameAttribute(): string
    {
        return $this->name;
    }


}
