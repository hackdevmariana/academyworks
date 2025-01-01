<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecommendedChannel extends Model
{
    use HasFactory;
    protected $fillable = [
        'is_active',
        'text',
        'url',
        'logo',
        'language',
    ];
}
