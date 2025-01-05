<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'reviewable_id',
        'reviewable_type',
        'rating',
        'title',
        'content',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function reviewable()
    {
        return $this->morphTo();
    }
}
