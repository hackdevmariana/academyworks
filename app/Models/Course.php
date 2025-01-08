<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
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
        'duration',
        'level',
        'language',
    ];

    // App\Models\Course.php
    public function modules()
    {
        return $this->hasMany(Module::class)->orderBy('order');
    }

    // App\Models\Module.php
    public function lessons()
    {
        return $this->hasMany(Lesson::class)->orderBy('order');
    }

}

