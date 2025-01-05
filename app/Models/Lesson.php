<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'module_id',
        'title',
        'slug',
        'video_url',
        'content',
        'order',
    ];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function speakers()
    {
        return $this->belongsToMany(Speaker::class, 'class_speaker');
    }
}
