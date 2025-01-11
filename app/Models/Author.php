<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'slug',
        'image',
        'url',
        'biography',
        'date_of_birth',
        'place_of_birth',
        'date_of_death',
        'place_of_death',
    ];

    public function quotes()
    {
        return $this->hasMany(Quote::class); 
    }
    
    public function books()
    {
        return $this->hasMany(Book::class); 
    }

    public function reviews()
    {
        return $this->morphMany(Review::class, 'reviewable');
    }
    public function readings()
    {
        return $this->hasMany(Reading::class);
    }
    public function getFullNameAttribute()
    {
        return "{$this->name} {$this->surname}";
    }
}

