<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    /**
     * Los campos que se pueden asignar masivamente.
     */
    protected $fillable = [
        'title',
        'slug',
        'language',
        'url',
    ];
}
