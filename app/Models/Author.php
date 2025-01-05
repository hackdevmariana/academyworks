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
        return $this->hasMany(Quote::class); // Relación con las citas
    }

    public function books()
    {
        return $this->hasMany(Book::class); // Relación con los libros
    }

    public function reviews()
    {
        return $this->morphMany(Review::class, 'reviewable');
    }

}

