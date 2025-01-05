<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReadingPart extends Model
{
    use HasFactory;

    protected $fillable = [
        'reading_id',
        'slug',
        'part_number',
        'title',
        'content',
    ];

    public function reading()
    {
        return $this->belongsTo(Reading::class);
    }

    public function reviews()
    {
        return $this->morphMany(Review::class, 'reviewable');
    }

}
