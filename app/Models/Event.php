<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    /**
     * Los campos que se pueden asignar masivamente.
     */
    protected $fillable = [
        'title',
        'slug',
        'subtitle',
        'abstract',
        'description',
        'image',
        'image_url',
        'banner',
        'banner_url',
        'place',
        'duration',
        'start_date',
        'start_time',
        'end_date',
        'end_time',
        'language',
    ];
}
