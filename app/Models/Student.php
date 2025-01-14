<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'place_of_origin',
        'interests',
        'social_profiles', // Cambiado de social_links a social_profiles
    ];

    protected $casts = [
        'interests' => 'array',
        'social_profiles' => 'json', // Cambiado de social_links a social_profiles
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'students_courses')
            ->withPivot('points')
            ->withTimestamps();
    }

    public function getTotalPointsAttribute()
    {
        return $this->courses->sum('pivot.points');
    }
}
